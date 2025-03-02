<?php
$connect = new mysqli("localhost", "root", "", "curego_pharmacy");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
