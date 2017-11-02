<?php

	$conn = mysqli_connect('localhost', 'root', 'dragon');

	if(! $conn ) {
	  die('Could not connect: ' . mysqli_error($conn));
	}

	$sql = "CREATE DATABASE knsccf";
	$query = mysqli_query($conn, $sql);
	if (! $query) {
		die("Error in creating database: ".mysqli_error($conn));
	}  

   $query_select_db = mysqli_select_db($conn, 'knsccf');
   if (! $query_select_db) {
        die("Could not open  database: ".mysqli_error($conn));
   }

	$sql = "CREATE TABLE user_details(user_id varchar(10) NOT NULL, user_email varchar(250) NOT NULL, password varchar(40) NOT NULL, username varchar(50) NOT NULL, sex varchar(5) NOT NULL, dob datetime NOT NULL, advisor varchar(20) NOT NULL, branch varchar(50) NOT NULL, batch varchar(10) NOT NULL, room varchar(3) NOT NULL, hostel varchar(20) NOT NULL, college varchar(50) NOT NULL, time_stamp datetime NOT NULL, level varchar(50) NOT NULL, primary key (user_id))";
	$query = mysqli_query($conn, $sql);
	if (! $query) {
		die("Error in creating login table: ".mysqli_error($conn));
	}

    $sql = "CREATE TABLE system_all(system_name varchar(10) NOT NULL, system_status varchar(25) NOT NULL, current_user_id varchar(10))";
	$query = mysqli_query($conn, $sql);
	if (! $query) {
		die("Error in creating login table: ".mysqli_error($conn));
	}

	$sql = "CREATE TABLE history(system_id varchar(10) NOT NULL, user_id varchar(10) NOT NULL, login_time datetime NOT NULL, logout_time datetime NOT NULL)"
	$query = mysqli_query($conn, $sql);
	if (! $query) {
		die("Error in creating history table: ".mysqli_error($conn));
	}

?>