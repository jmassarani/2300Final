<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <?php 
    require_once('includes/config.php');
    include 'includes/header.php';
?>
	</head>

	<body>
        <?php
            global $current_page;
            $current_page = "What is Schmooze?";
            include "includes/nav.php"
        ?>
        <div class="container">
            <h3>schmooze |SHmo͞oz|</h3> 
            <h5>(also shmooze) Verb [no obj.] </h5>
            <p>Talk cozily in a friendly comfortable manner, getting to know the other person or people with an ultimate goal to impress and create communication and authentic relationships. </p>
            <h3>Why hire a Schmoozer for your project, event, as an extra hands on fundraiser, organizer, sales person, socializer, product tester, pr professional, project extra?</h3>
            <ul> 
                <li>Do you notice that when you break bread with an acquaintance that you’re paving the way to creating true friendship?</li>
                <li>Have you ever been in an airport or waiting for an appointment and met someone after speaking for a while you learned from, and felt grateful you had by chance met?</li>
                <li>Are you stuck on a project at work and need some creative input on how to pull the event or launch together by making it truly memorable?</li>
                <li>Have you attended awards dinners, special events, conferences and had a hard time “getting started” to mix and meet people in the crowd?</li>
                <li>Are you a brilliant engineer, artist, author, computer genius but get a bit queasy when you need to be in the limelight or a social gathering? Or develop a plan of action to market your product or service? </li>
            </ul>

        </div>
	</body>
</html>