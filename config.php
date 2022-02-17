<?php 

$server = "DESKTOP-5903S8A\SQLEXPRESS";
//$user = "sa";
//$pass = "p@ssword";
//$database = "AusthirCARS";
$connectionInfo = array("Database" =>"AusthirCARS", "user" => "sa", "pass" => "p@ssword"); 
$conn = sqlsrv_connect($server, $connectionInfo);

if ($conn) {
    $echo 'Connected';
}

?>
