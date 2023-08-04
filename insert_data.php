<?php 
include 'dbcon.php';
include 'dbcon.php';

if (isset($_POST['add_users'])) {
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['image'];

  
}


if($fname=="" || empty($fname)){

    header('location:index.php?message=You Need To Fill The First Name!');
}
 else if($lname=="" || empty($lname)){

    header('location:index.php?message=You Need To Fill The Last Name!');
}
else if($email=="" || empty($email)){

    header('location:index.php?message=You Need To Fill The Email!');
}
else if($password=="" || empty($password)){

    header('location:index.php?message=You Need To Fill The Password!');
}
else{
    $query="insert into `user_details` (`first_name`,`last_name`,`email`,`password`,`image`) values ('$fname','$lname','$email','$password','$image')";

    $result=mysqli_query($connection,$query);
    
    if(!$result){
        die("Query failed".mysqli_error());
       }
 else{
    header('location:index.php?insert_msg=Your data has been added sucessfully!');
       }
}


?>