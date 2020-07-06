<?php
include 'includes/config.php';
session_start();
extract($_POST);
if (!empty($_POST)) {
    $sql = mysqli_query(
        $con,
        "SELECT * 
		FROM users 
		WHERE user_email ='" . addslashes($email) . "' and user_pwd='" . addslashes($pwd) . "' "
    );
    $row = mysqli_fetch_assoc($sql);
    if (!empty($row)) {
        $time = time();
        $_SESSION['client']['name'] = $row['user_name'];
        $_SESSION['client']['uid'] = $row['user_id'];
        $_SESSION['client']['status'] = true;
        header('location:index.php');
    } else {
        $_SESSION['error'] = "Enter Valid Email Or Password!";
        header("location:index.php");
    }
} else {
    $_SESSION['error'] = "please enter email or password!";
    header("location:index.php");
}
