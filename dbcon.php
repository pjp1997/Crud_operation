<?php
define("Hostname","localhost");
define("username","root");
define("password","");
define("database","user");

$connection = mysqli_connect(Hostname,username,password,database);

if(!$connection){
die("connection failed");

}
else{
    // echo "Connection sucessfully";
}

?>