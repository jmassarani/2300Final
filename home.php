<!doctype html>

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
            <h1>Queen of Schmooze</h1>
        </header>
        <?php
            global $current_page;
            $current_page = "Home";
            include "includes/nav.php"
        ?>
        <div class="container flex body-margin">
            <div class="home">
                <p>&quot;You&#39;re a great organization with great ideas and want to show it - why leave things to chance?&quot; Sometimes an extra push or nudge or effort it needed!</p>
                <p>One of our biggest challenges is how to connect with one another in a genuine way.  We are here to help you to make this happen. </p>
                <p>Schoomzers by the hour or short term hire for the project – Contact us to discuss your needs for: a social butterfly at your next event, some who smartly connects people to people, a tester for your new product or new product introduction, trade show, an attendee at an important social or business event, dinners, lunch meetings, special event. Someone to call in to finish a project, plan an event, make phone calls, increase sales and develop new business, organize and follow-up on pr outreach, attend a trade show and more ...</p>
                <p>schmooze |SHmo͞oz| (also shmooze)  Verb [no obj.] Talk cozily in a friendly comfortable manner, getting to know the other person or people with an ultimate goal to impress and create communication and authentic relationships. </p>
                <p>Why hire a Schmoozer for your project, event, as an extra hands on fundraiser, organizer, sales person, socializer, product tester, pr professional, project extra?</p>
                <ul> 
                    <li>Do you notice that when you break bread with an acquaintance that you’re paving the way to creating true friendship?</li>
                    <li>Have you ever been in an airport or waiting for an appointment and met someone after speaking for a while you learned from, and felt grateful you had by chance met?</li>
                    <li>Are you stuck on a project at work and need some creative input on how to pull the event or launch together by making it truly memorable?</li>
                    <li>Have you attended awards dinners, special events, conferences and had a hard time “getting started” to mix and meet people in the crowd?</li>
                    <li>Are you a brilliant engineer, artist, author, computer genius but get a bit queasy when you need to be in the limelight or a social gathering? Or develop a plan of action to market your product or service? </li>
                </ul>
                <p>Our company was formed to be the missing link. By responding with flexible hours on projects we can be there for you when you need us. </p>
                <ul>
                    <li>When do I need a schmoozer or two?</li>
                    <li>Do you have an important business event that requires entertaining?</li>
                    <li>An important dinner party and you want to make sure there is a comfortable flow of lively conversation?</li>
                    <li>A special event that needs planning, tweaking, music, a mood or theme?</li>
                    <li>Launching a new product and need assistance at the demo?</li>
                    <li>Need someone to interact with media, customers, potential customers, investors, and potential investors?</li>
                    <li>Have a goal to reach and short on staff?</li>
                    <li>Setting up a press conference? Need help?</li>
                    <li>Coming down to the wire on a special event? Need a few extra hands?</li>
                    <li>Attending a trade show and short on staff?</li>
                    <li>Holding an important business dinner and need some lively conversation to break the ice?</li>
                    <li>Networking at an event and need some more feet on the ground?</li>
                    <li>Are you a brilliant techie and need someone to translate your ideas into concepts for dummies?</li>
                </ul>
            </div>
            <div class="profile center-align">
<!--                TODO: need to add a valid home page image-->
<!--                <img src="graphics/Profile.jpg" alt="profile-picture">-->
            </div>
        </div>
	</body>
</html>