<?php
$servername="localhost";
$username = "root";
$password = "root";

$conn = new mysqli_connect($servername , $username , $password) ; 
if($conn ->connect_error){
	die("connection is not able to established".$conn->connect_error);
}
$sql = "CREATE DATABASE testdb";
if(mysqli_connect($conn,$sql)){
	echo "database created successfully";
}
else{
	echo "not able to create database because ".mysqli_error($conn);
}
$conn ->close();
?>

