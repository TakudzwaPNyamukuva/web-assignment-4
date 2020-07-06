<?php
session_start();
include('includes/config.php');
extract($_POST);
if (!empty($_POST)) {
    if (!is_numeric($phone)) {
        $_SESSION['error'] = "Enter Valid Mobile Number";
    } else if (strlen($phone) < 10 || strlen($phone) > 10) {
        $_SESSION['error'] = "Enter Valid 10 digit Mobile Number";
    }
    $sq = "select * from enquiries where user_email='$email' and user_phone='$phone' ";
    $res = mysqli_query($con, $sq);
    $row = mysqli_fetch_assoc($res);
    if ($email == $row['user_email'] && $phone == $row['user_phone']) {
        if ($row['enquiry'] = $enquiries) {
            $_SESSION['error'] = "Enquiry Already Made";
        }
    }
    if (!empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        header("location: enquiries.php");
    } else {
        $q = "insert into  enquiries (user_name,user_phone,user_email,enquiry) values('$userid','$phone','$email','$enquiries')";
        mysqli_query($con, $q);
        $_SESSION['done'] = "Enquiry sent successfully";
        header("location: index.php");
    }
} else {
    header("location: enquiries.php");
}
