<?php
include_once 'include/class.user.php';  


if ($_GET['mode'] == "D") {
    $id = $_GET['id'];
    $objFunction->table='car';
    $objFunction->cond=array('id'=>$id);
    if($objFunction->delete()){
        redirect('index.php?page=driver');
    }else{
      echo "error while deleting";  
    }
}

?>


<table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">Taxi Number</th>
      <th scope="col">Available Date</th>
      <th scope="col">Shift</th>
      <th scope="col">Changeover Time</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>

    </tr>
  </thead>



   <?php
    $sno = 1;
    $sql = "select * from car where 1=1";
    $objFunction->query=$sql;
    $result = $objFunction->execute();
    while ($row = $objFunction->fetch_array()) {
        ?>


  <tbody>
    <tr>
      <th><?php echo $row['taxinumber'] ?></th>
      <th><?php echo $row['date'] ?></th>
      <th><?php echo $row['shift'] ?></th>
      <th><?php echo $row['changeover'] ?></th>
      <th><?php echo $row['phonenumber'] ?></th>
      <th><?php echo $row['address'] ?></th>
      <!-- <th><?php echo $row['image'] ?></th> -->
      <th> <img src="<?php echo GALLERY_URL.$row['image_name']?>" width="100" height="80"/> </th>
                            
      <th>
          <a href="index.php?page=driver&mode=U&id=<?php echo $row['id'] ?>">Edit</a>
      </th>         
      <th>
          <a onclick="return confirm('Do you really want to delete ??')" href="index.php?page=driver&mode=D&id=<?php echo $row['id'] ?>&taxinumber=<?php echo $row['taxinumber'] ?>">Delete</a>
      </th>   

    </tr>

  </tbody>

<?php
  }
  ?>

</table>