<?php
$server = "localhost"; //serverName\instanceName
$user = 'root';
$pass = '';
$database = 'austhircars';
$conn = mysqli_connect($server,$user,$pass,$database);

if($conn) {
     //echo "Connection established.<br />";
}else{
     die("<script>alert('Connection Failed.')</script>");
}
?>