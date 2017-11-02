<?php

    require_once("connection.php");
    session_start();

    header("Content-Type: text/xml");
    echo "<?xml version = '1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
    echo "<response>";

    $sql = "SELECT * FROM history";
    $query = mysqli_query($conn, $sql);
    if (! $query) {
    	die("Error in retreiving system data: ".mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <item>
            <system>{$row['system_id']}</system>
            <id>{$row['user_id']}</id>
            <login>{$row['login_time']}</login>
            <logout>{$row['logout_time']}</logout>
        </item>";
    }

    echo "</response>";

?>