<?php
include('connection.php');
// ---create databse---
if($connect){
echo "Database succesfully created";
}
else{
$conn= new mysqli('localhost','root','','');
$db="CREATE DATABASE eflyer";
$dbRun=mysqli_query($connect,$db);
var_dump($dbRun);
}
 
?>