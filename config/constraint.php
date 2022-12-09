<?php

define('URL','http://localhost/360Shop/');

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "qldienthoai";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Loi ket noi db " . $conn->connect_error;
}
