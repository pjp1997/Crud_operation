<?php include('header.php')?>
<?php include('dbcon.php')?>

<div class="box1">
  <h2>ALL USERS</h2>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    ADD USER
  </button>


</div>

<table class="table table-hover table-striped table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>User Email</th>
      <th>User Password</th>
      <th>User Image</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php
               
               $query="select * from `user_details`";
               $result=mysqli_query($connection,$query);

               if(!$result){
                die("connetion failed".mysqli_error());
               }
              else{
                // print_r($result);
                while($row=mysqli_fetch_assoc($result)){
                 ?>
    <tr>
      <td>
        <?php echo $row['id'] ?>
      </td>
      <td>
        <?php echo $row['first_name'] ?>
      </td>
      <td>
        <?php echo $row['last_name'] ?>
      </td>
      <td>
        <?php echo $row['email'] ?>
      </td>
      <td>
        <?php echo $row['password'] ?>
      </td>
      <td>
        <?php echo $row['image'] ?>
      </td>
      <!-- <td>
        <?php
      if (!empty($row['image'])) {
        $decodedImage = base64_decode($row['image']);
        echo '<img src="data:image/jpeg;base64,' . base64_encode($decodedImage) . '" alt="User Image" style="max-width: 100px;">';
    } else {
        echo 'No Image Available';
    }
    ?>
      </td>
    -->
      <td>
        <a href="update_page.php?id=<?php echo $row['id'] ?>" class="btn btn-success">UPDATE</a>
      </td>
      <td>
        <a href="delete_page.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>
      </td>
    </tr>

    <?php
}
              }
              
              
              ?>

  </tbody>
</table>
<?php
if(isset($_GET['message'])){
  echo "<h6>".$_GET['message']."</h6>";
}
?>

<?php
if(isset($_GET['insert_msg'])){
  echo "<h6>".$_GET['insert_msg']."</h6>";
}
?>
<?php
if(isset($_GET['update_msg'])){
  echo "<h6>".$_GET['update_msg']."</h6>";
}
?>
<?php
if(isset($_GET['delete_msg'])){
  echo "<h6>".$_GET['delete_msg']."</h6>";
}
?>


<form action="insert_data.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD USER</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="f_name">First Name</label>
            <input type="text" name="f_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="l_name">Last Name</label>
            <input type="text" name="l_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" name="add_users" value="ADD">
        </div>
      </div>
    </div>
  </div>
</form>

<?php include('footer.php')?>