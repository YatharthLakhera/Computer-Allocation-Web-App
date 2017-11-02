<?php

    require_once("connection.php");
    session_start();

    header("Content-Type: text/xml");
    echo "<?xml version = '1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
    echo "<response>";

    $name = $_POST["name"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $dob = $_POST["dob"];
    $sex = $_POST["sex"];
    $branch = $_POST["branch"];
    $batch = $_POST["batch"];
    $hostel = $_POST["hostel"];
    $room = $_POST["room"];
    $advisor = $_POST["uesr_advisor"];
    $college = $_POST["college"];
    $level = "student";
    echo "<label>";
    $sql = "INSERT INTO user_details(user_id, user_email, password, username, sex, dob, advisor, branch, batch, room, hostel, college, time_stamp, level) VALUES('$id', '$email', '$pass', '$name', '$sex', '$dob', '$advisor', '$branch', '$batch', '$room', '$hostel', '$college', now(), '$level')";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
    	echo "Error in retreiving system data: ".mysqli_error($conn);
    }
    else{
        echo "Registration Successful";
    }
    echo "</label>";

    echo "</response>";

?>