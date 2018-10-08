<?php
include_once 'include/class.user.php';  $user = new User(); // Checking for user logged in or not

 if (isset($_REQUEST['submit'])){
 extract($_REQUEST);
 $register = $user->complain($taxinumber, $complain);
 if ($register) {
 // Registration Success
 // echo 'Successful.';
 } else {
 // Registration Failed
 echo 'Failed.';
 }
 }

?>

    <!-- row 3: article/aside -->
    <div class="row">
    	<article class="col-lg-offset-1 col-sm-offset-1 col-lg-8 col-sm-7 col-lg-push-3 col-sm-push-4">
          
            <legend><strong>Complain</strong></legend>
          <form action="" method="post" name="reg">
              <table>
              <tbody>
              <tr>
              <th>Taxi number:</th>
              <td><input type="text" name="taxinumber" required="" /></td>
              </tr>
              <th>Complain:</th>
              <!-- <td><input type="text-box" name="date" required=""/></td> -->
              <td><textarea rows="4" cols="50" type="text" name="complain" required="" />
				</textarea></td>
              </tr>
              
              <tr>
              <td></td>
              <td><input onclick="return(submitreg());" type="submit" name="submit" value="Submit" /></td>
              </tr>
              <tr>
              <td></td>
              
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