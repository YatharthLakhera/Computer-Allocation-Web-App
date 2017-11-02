<?php

    require_once("connection.php");
    session_start();

    header("Content-Type: text/xml");
    echo "<?xml version = '1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
    echo "<response>";

    $sys_id = $_POST['sysid'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE system_all SET current_user_id = 'no user', system_status = 'available' WHERE system_name = '$sys_id'";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
        die("Error in retreiving system data: ".mysqli_error($conn));
    }

    $sql = "UPDATE history SET logout_time = now() WHERE system_id = '$sys_id'";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
        die("Error in entering data history table: ".mysqli_error($conn));
    }
    echo "Success";
    echo "</response>";

?>