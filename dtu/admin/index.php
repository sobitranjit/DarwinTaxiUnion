<?php
session_start();
include_once 'include/class.user.php';

$user = new User(); $id = $_SESSION['id'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }


$page=($_GET['page']!="")?$_GET['page']:'home';

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Darwin Taxi Union</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
</head>

<body>
<div class="container">
	<!-- row 1: navigation -->
    <!-- Menu -->
     <?php include('pageparts/menu.php') ?>
   
    <!-- row 2: header -->
    <!-- Header -->
    <?php include('pageparts/header.php') ?>


    <!-- row 3: article/aside -->
    <!-- Body Parts -->
    <?php include_once("page/$page.php") ?>


    <!-- end row 3 -->
    
    <!-- row 4 -->
   <!-- Footer -->
   <?php include('pageparts/footer.php') ?>

</div> <!-- end container -->

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('.nav-tabs a:first').tab('show');
        });
    </script>


</body>
</html>