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
  $sql = "SELECT * FROM car";
  if($result = $mysqli->query($sql)){
      if($result->num_rows > 0){
        
          echo "<table class='table table-dark'>";
              echo "<tr>";
                  // echo "<th>id</th>";

                  echo "<th>Taxi Number</th>";
                  echo "<th>Date </th>";
                  echo "<th>Shift </th>";
                  echo "<th>Change Over Time </th>";
                  echo "<th>Phone Number </th>";
                  echo "<th>Address </th>";
                  echo "<th>Picture </th>";

              echo "</tr>";
          while($row = $result->fetch_array()){
              echo "<tr>";
                  // echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['taxinumber'] . "</td>"; 
                  echo "<td>" . $row['date'] . "</td>";
                  echo "<td>" . $row['shift'] . "</td>";
                  echo "<td>" . $row['changeover'] . "</td>";
                  echo "<td>" . $row['phonenumber'] . "</td>";
                  echo "<td>" . $row['address'] . "</td>";
                  echo "<td>" . $row['image'] . "</td>";

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