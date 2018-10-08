<?php
include_once 'include/class.user.php';  

?>



<div class="row">
          

<?php
  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $mysqli = new mysqli("localhost", "root", "", "dtu");
   
  // Check connection
  if($mysqli === false){
      die("ERROR: Could not connect. " . $mysqli->connect_error);
  }
   
  // Attempt select query execution
  $sql = "SELECT * FROM complain";
  if($result = $mysqli->query($sql)){
      if($result->num_rows > 0){
        
          echo "<table class='table table-dark'>";
              echo "<tr>";
                  // echo "<th>id</th>";

                  echo "<th>Taxi Number &nbsp;&nbsp;</th>";
                  echo "<th>Complain</th>";
                  
              echo "</tr>";
          while($row = $result->fetch_array()){
              echo "<tr>";
                  // echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['taxinumber'] . "</td>"; 
                  echo "<td>" . $row['complain'] . "</td>";
                  

              echo "</tr>";
          }
          echo "</table>";
          // Free result set
          $result->free();
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
  }
   
  // Close connection
  $mysqli->close();
  ?>
    

        </div>