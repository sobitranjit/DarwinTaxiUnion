<div class="row">
    	<nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="glyphicon glyphicon-arrow-down"></span>
                  MENU
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=code">Code of Conduct</a></li>
                    <li><a href="index.php?page=owner">Update Car Availability</a></li>
                    <li><a href="index.php?page=gallery">Gallery</a></li>
                    <li><a href="index.php?page=contact">Contact / Complain</a></li>
                    <li><a href="index.php?q=logout">Logout</a></li>
                    <li><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    Welcome <?php $user->get_username($id); ?></h4></li>
                    

                    
                </ul> 
            </div>
         </nav> 
    
</div>