<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/home.css">
        <?php 
            require_once('includes/config.php');
            include 'includes/header.php';
        ?>
	</head>

	<body>
        <header>
            <img src="images/Logo.png" alt="Logo">
        </header>
        <?php
            global $current_page;
            $current_page = "Home";
            include "includes/nav.php"
        ?>
        <div class="container flex body-margin">
            <div class="home col-sm-9">
                <h2>You're a great organization with great ideas. Do you want to show it? Why leave things to chance? Sometimes an extra push is needed!</h2>
                <p>One of our biggest challenges is how to connect with one another in a genuine way.  We are here to help you to make this happen. </p>
            </div> <!-- end of home-col-sm-9 div -->
            <div class="center-align col-sm-3">
<!--TODO: need to add a valid home page image; temporary placeholder image-->
                <img class="image" src="images/HomeCartoon.jpg" alt="home-cartoon">
            </div>
        </div>
	</body>
</html>