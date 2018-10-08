<?php
include_once 'include/class.user.php';  $user = new User(); // Checking for user logged in or not

 if (isset($_REQUEST['submit'])){
 extract($_REQUEST);
 $register = $user->reg_user($firstname, $lastname, $username, $phonenumber, $category, $password);
 if ($register) {
 // Registration Success
 // echo 'Registration successful <a href="login.php">Click here</a> to login';
 	header("location:login.php");
 } else {
 // Registration Failed
 echo 'Registration failed.';
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
          <legend><strong>Please Register to continue</strong></legend>
          <form action="" method="post" name="reg">
			<table>
			<tbody>
			<tr>
			<th>First Name:</th>
			<td><input type="text" name="firstname" required="" /></td>
			</tr>
			<th>Last Name:</th>
			<td><input type="text" name="lastname" required="" /></td>
			</tr>
			<tr>
			<th>User Name:</th>
			<td><input type="text" name="username" required="" /></td>
			</tr>
			<tr>
			<th>Phone Number:</th>
			<td><input type="text" name="phonenumber" required="" /></td>
			</tr>
			<tr>
            <th>Category:</th>
            <td>
                <input type="radio" name="category" id="category" value="Driver"/> Driver
                <input type="radio" name="category" id="category" value="Owner"/> Taxi Owner

            </td>
        </tr>
			<tr>
			<th>Password:</th>
			<td><input type="password" name="password" required="" /></td>
			</tr>
			<tr>
			<td></td>
			<td><input onclick="return(submitreg());" type="submit" name="submit" value="Register" /></td>
			</tr>
			<tr>
			<td></td>
			<td><a href="login.php">Already registered! Click Here!</a></td>
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
		 function submitreg() {
		 var form = document.reg;
		 if(form.name.value == ""){
		 alert( "Enter name." );
		 return false;
		 }
		 else if(form.uname.value == ""){
		 alert( "Enter username." );
		 return false;
		 }
		 else if(form.upass.value == ""){
		 alert( "Enter password." );
		 return false;
		 }
		 else if(form.uemail.value == ""){
		 alert( "Enter email." );
		 return false;
		 }
		 }
	</script>

</body>
</html>
