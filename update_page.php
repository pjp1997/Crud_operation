<?php include('header.php')?>
<?php include('dbcon.php')?>


<?php 
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="select * from `user_details` where `id`='$id'";
    $result=mysqli_query($connection,$query);

    if(!$result){
     die("connetion failed".mysqli_error());
    }
   else{
       $row=mysqli_fetch_assoc($result);
    //    print_r($row);

     }
    }
     ?>
<?php
     if (isset($_POST['update_users'])) {
        if(isset($_GET['id_new'])){
            $idnew=$_GET['id_new'];
        }
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $image = $_POST['image'];


        $query="update `user_details` set `first_name`='$fname',`last_name`='$lname',`email`='$email',`password`='$password',`image`='$image' where `id`= $idnew";

        $result=mysqli_query($connection,$query);

    if(!$result){
     die("connetion failed".mysqli_error());
    }
    else{
        header('location:index.php?update_msg=Your data has been updated sucessfully!');
    }
      
    }
    
?>

<form action="update_page.php?id_new=<?php echo $id ;?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value=" <?php echo $row['last_name'] ?>">
    </div>
    <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" name="email" class="form-control" value=" <?php echo $row['email'] ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value=" <?php echo $row['password'] ?>">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" value="<?php echo $row['image'] ?>">
    </div>
    <div>
        <input type="submit" class="btn btn-success m-3" name="update_users" value="UPDATE">

    </div>
</form>

<?php include('footer.php')?>