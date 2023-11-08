<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "ebook";

$conn = mysqli_connect($server,$user,$pass,$database);

if (!$conn) {
	die ("<script>alert('gagal tersambung dengan database.')</script>");
}