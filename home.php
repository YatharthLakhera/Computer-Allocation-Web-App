<?php

    require_once("connection.php");
    session_start();

    header("Content-Type: text/xml");
    echo "<?xml version = '1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
    echo "<response>";

    $sql = "SELECT * FROM system_all WHERE system_status = 'available'";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
    	die("Error in retreiving system data: ".mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <available>
            <system>{$row['system_name']}</system>
            <status>{$row['system_status']}</status>
        </available>";
    }

    $sql = "SELECT * FROM system_all WHERE system_status = 'not available'";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
        die("Error in retreiving system data: ".mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <not_available>
            <system>{$row['system_name']}</system>
            <status>{$row['system_status']}</status>
            <id>{$row['current_user_id']}</id>
        </not_available>";
    }

    echo "</response>";

?>