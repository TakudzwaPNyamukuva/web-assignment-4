<?php
include 'config.php';
session_start();
date_default_timezone_set('Africa/Harare');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buoy Truth Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <!-- Nav -->
    <nav class="main-nav">
        <a href="index.php">
            <img class="logo" src="img/Logo 2.png" alt="logo" />
        </a>

        <ul class="nav-ul show">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="products.php">Products</a></li>

            <!-- ==========Login / Logout========== -->
            <?php if (isset($_SESSION['client']['status'])) {
                echo ' <li><a href="logout.php">Logout</a>';
                echo ' <li><a href="check_enquiries.php">Check Enquiries</a>';
            } else {
                echo '<li><a href="enquiries.php">Enquiries</a></li>';
            }
            ?>
            <!-- ==========Login / Logout========== -->
        </ul>

        <div class="toggle-collapse">
            <div class="toggle-icons">
                <i class="fas fa-bars"> </i>
            </div>
        </div>
    </nav>