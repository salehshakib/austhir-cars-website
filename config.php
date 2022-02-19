<?php

$server = "DESKTOP-3R52OF2\\SQLEXPRESS";
$connectionInfo = array("Database"=>"AusthirCars", "user"=>"sa", "password"=>"mypassforsql");
$conn = sqlsrv_connect($server, $connectionInfo);



?>