<?php
$username="root";
$password="";
$server='localhost';
$db='yeah';
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    echo "Connection Successfull";
}else{
    echo "No Connection";
}

?>