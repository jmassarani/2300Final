<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
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
            $current_page = "About";
            include "includes/nav.php"
        ?>
        <div class="profile center-align col-sm-3">
            <img src="images/RonniRabinPR.png" alt="profile-picture">
        </div>
        <div class="container flex body-margin col-sm-9">
            Ronni S. Rabin founded Queen of Schmooze to help others. She has extensive experience in sales, marketing, and client development/corporate relations. She excels at opening doors with top-decision makers, developing and building relationships, outreach, creating partnerships, increasing sales, refining brands.
        </div>
	</body>
</html>