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
                <h4>"You're a great organization with great ideas and want to show it - why leave things to chance?" Sometimes an extra push or nudge or effort it needed!</h4>
                <p>One of our biggest challenges is how to connect with one another in a genuine way.  We are here to help you to make this happen. </p>
                <p>Schoomzers by the hour or short term hire for the project – Contact us to discuss your needs for: a social butterfly at your next event, some who smartly connects people to people, a tester for your new product or new product introduction, trade show, an attendee at an important social or business event, dinners, lunch meetings, special event. Someone to call in to finish a project, plan an event, make phone calls, increase sales and develop new business, organize and follow-up on pr outreach, attend a trade show and more ...</p>
            </div>
            <div class="center-align col-sm-3">
<!--TODO: need to add a valid home page image; temporary placeholder image-->
                <img class="image" src="images/HomeCartoon.jpg" alt="home-cartoon">
            </div>
        </div>
	</body>
</html>