<?php
$servername="localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername , $username , $password) ; 
if($conn ->connect_error){
	die("connection is not able to established".$conn->connect_error);
}
$sql = "CREATE DATABASE testdb";
if($conn->query($sql) === TRUE){
	echo "database created successfully";
}
else{
	echo "not able to create database because ".$conn->connect_error;
}
?>
