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
        <?php
            global $current_page;
            $current_page = "Home";
            include "includes/nav.php"
        ?>
        <div class="container flex body-margin">
            <div class="col-xs-12">
                <h2>You're a great organization with great ideas. Do you want to show it? Why leave things to chance? Sometimes an extra push is needed!</h2>
                <p>One of our biggest challenges is how to connect with one another in a genuine way.  We are here to help you to make this happen. </p>
            </div> 
            <img class="col-xs-12" src="images/networking2.jpg" alt="homepage">
            <!--            image can be found on: http://www.girisimcilerokulu.com/girisimciler-okulunun-en-populer-2015-yazisi/-->
       
        </div>
        <footer>
        </footer>
	</body>
</html>