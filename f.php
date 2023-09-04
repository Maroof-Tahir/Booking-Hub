<?php
$x= $_REQUEST['username'];
$y= $_REQUEST['password'];
$z=$_REQUEST['mail'];


$conn = new mysqli("localhost", "root", "","first");

$sql="INSERT INTO cs(username,password,email)VALUES('".$x."','".$y."','".$z."')";
$conn->query($sql);
$sql = "SELECT * FROM cs";
$result = $conn->query($sql);
header("location:afterlog.php");
?>