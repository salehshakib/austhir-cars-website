<?php
include 'config.php';

$id = $_GET['id']; // $id is now defined

mysqli_query($conn,"DELETE FROM service WHERE serviceId='".$id."'");
mysqli_close($conn);
header("Location: admin-panel.php");
?>