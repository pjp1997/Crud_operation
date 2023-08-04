<?php include('dbcon.php')?>
<?php 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="delete from `user_details` where `id`='$id'";
    $result=mysqli_query($connection,$query);

    if(!$result){
     die("Query failed".mysqli_error());
    }
   else{
    header('location:index.php?delete_msg=Your data has been deleted sucessfully!');
     }

}

?>