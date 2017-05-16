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
            $current_page = "What We Do";
            include "includes/nav.php"
        ?>
        <div class="container">
            <h3>schmooze |SHmo͞oz|</h3> 
            <h5>(also shmooze) Verb [no obj.] </h5>
            <p>To talk cozily in a friendly and comfortable manner, getting to know other people with an ultimate goal to impress, communicate, and create authentic relationships. </p>
            <div class="col-xs-10">
            <h2>When do I need a schmoozer or two?</h2>
                Schmoozers are perfect for:
                <ul>
                    <li>An important business event that requires entertaining</li>
                    <li>An important dinner party, where you want to make sure there is a comfortable flow of lively conversation</li>
                    <li>A special event that needs planning, tweaking, music, a mood, or theme</li>
                    <li>Launching a new product with  assistance needed at the demo</li>
                    <li>Interacting with media, customers, potential customers, investors, and potential investors on your behalf</li>
                    <li>Helping you reach a goal when you're short on staff</li>
                    <li>Setting up a press conference</li>
                    <li>When you're coming down to the wire on a special event and need a few extra hands</li>
                    <li>Serving as extra staff at a trade show</li>
                    <li>Providing lively conversation to break the ice at an important business dinner</li>
                    <li>Providing some more feet on the ground at a networking event</li>
                    <li>Helping a brilliant techie translate their great ideas into clear concepts</li>
                </ul>
            
            <h2>Why hire a Schmoozer?</h2>
            <ul> 
                <li>Do you notice that when you break bread with an acquaintance, you’re paving the way to creating true friendship?</li>
                <li>Have you ever been in an airport or waiting for an appointment and met someone after speaking for a while you learned from, and felt grateful you had by chance met?</li>
                <li>Are you stuck on a project at work and need some creative input on how to pull the event or launch together by making it truly memorable?</li>
                <li>Have you attended awards dinners, special events, conferences and had a hard time “getting started” to mix and meet people in the crowd?</li>
                <li>Are you a brilliant engineer, artist, author, computer genius but get a bit queasy when you need to be in the limelight or a social gathering? Or develop a plan of action to market your product or service? </li>
            </ul>
            </div> <!-- end of col-xs-10 div-->
        </div>
        <footer>
        </footer>
	</body>
</html>