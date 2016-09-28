<?php

$conn = mysqli_connect("localhost", "root", "root", "logintest");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}

?>