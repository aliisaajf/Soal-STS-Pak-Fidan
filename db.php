<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dataguru";

$connect = new mysqli($server, $username, $password, $database);
if ($connect->connect_error) {
    die("koneksi gagal: " .$connect->connect_error);
}
?>
