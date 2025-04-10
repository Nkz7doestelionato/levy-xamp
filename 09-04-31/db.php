<?php
session_start();
$host = "localhost";
$user = "roor";
$password = "";
$dbname = "login_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " $conn->connect_error);
}
?>