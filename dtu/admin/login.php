<?php
session_start();
	include_once 'include/class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
	    $login = $user->check_login($username, $password);
	    if ($login) {
	        // Registration Success
	       header("location:index.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
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
   
    <!-- row 2: header -->
    <!-- Header -->
    <?php include('pageparts/header.php') ?>

     <div class="row">
      <article class="col-lg-offset-1 col-sm-offset-1 col-lg-8 col-sm-7 col-lg-push-3 col-sm-push-4">
          <legend><strong>Please Login as Admin</strong></legend>
			<form action="" method="post" name="login">
			<table>
			<tbody>
			<tr>
			<th>UserName or Email:</th>
			<td><input type="text" name="username" required="" /></td>
			</tr>
			<tr>
			<th>Password:</th>
			<td><input type="password" name="password" required="" /></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Login" /></td>
			</tr>
			<tr>
			<td></td>
			<!-- <td><a href="registration.php">Register new user</a></td> -->
			</tr>
			</tbody>
			</table>
			</form>
         
        </article>


        <aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
           <p><h3>Service Area: Darwin,</h3></p>
            <p>
              <b>Office Address</b> <br/>
              315 Larkin Ave <br/>
              Marrara NT 0812 <br/>
            </p>
            <p>
              <b>Admin Phone:</b> (08) 8985 0720 <br/>
              <b>Direct Bookings:</b> (08) 8985 0796   <br/>              
            </p>
         </aside>
    

        </div>


</div>



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
    <script type="text/javascript" language="javascript">

            function submitlogin() {
                var form = document.login;
				if(form.username.value == ""){
					alert( "Enter phonenumber or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}
			}

</script>

</body>
</html>