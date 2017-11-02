<?php
    
    require_once("connection.php");

    session_id("set");
    session_start();

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (isset($_SESSION['email'])) {
    	$email = $_SESSION['email'];
    	$pass = $_SESSION['pass'];
    }

    $row = mysqli_fetch_array(mysqli_query($conn, "SELECT count(1) FROM user_details WHERE user_email = '$email' AND password = '$pass' AND level = 'admin'"), MYSQL_ASSOC);

    if ($row["count(1)"] == '1') {

    	$_SESSION['email'] = $email;
    	$_SESSION['pass'] = $pass;
        header("location: admin_page.php");
    }
 
?>