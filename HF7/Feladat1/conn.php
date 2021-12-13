<?php
$s="localhost";
$user="root";
$pass="";
$db="fakestore";

$conn = new mysqli($s, $user, $pass, $db);

if ($conn->connect_error) {
    die("Nem lehet csatlakozni a szerverhez!");
}