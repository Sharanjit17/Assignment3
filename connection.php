<?php


include "credentials.php"; 
//database connection
$connection = new mysqli('localhost', $user, $pw, $FA);

//select all records from our table
$allrecords = $connection->prepare("select * from scp");
$allrecords->execute();
$result = $allrecords->get_result();

?>