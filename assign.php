<?php

    require_once("connection.php");
    session_start();

    header("Content-Type: text/xml");
    echo "<?xml version = '1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
    echo "<response>";

    $sys_id = $_POST['sysid'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE system_all SET current_user_id = '$user_id', system_status = 'not available' WHERE system_name = '$sys_id'";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
    	die("Error in retreiving system data: ".mysqli_error($conn));
    }

    $sql = "INSERT INTO history(system_id, user_id, login_time, logout_time) VALUES('$sys_id', '$user_id', now(), '----')";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
        die("Error in entering data history table: ".mysqli_error($conn));
    }
    echo "Success";
    echo "</response>";

?>