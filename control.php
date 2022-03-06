<?php
	// Configuration
	Function config(){
		
	$host = 'localhost';
	$dbname = 'sencar';
	$username = 'root';
	$password = '';			
	

	$mdi = "host={$host} dbname={$dbname} user={$username} password={$password}";
	$conn = mysqli_connect($mdi);
	return $conn;
	}