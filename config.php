<?php

$DATABASE_HOST= 'localhost';
$DATABASE_USER= 'root';
$DATABASE_PASS= '';
$DATABASE_NAME='online education system';

$conn = new mysqli($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

?>