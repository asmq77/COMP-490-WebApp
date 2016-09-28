<?php

$conn = mysqli_connect("localhost", "root", "root", "logintest");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}

$conn = mysqli_connect("evening-tor-76502.herokuapp.com", "b2b6d4f62d70b0", "d2a42c67", "logintest");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}

?>