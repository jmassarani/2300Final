<!doctype html>

<html>
	<head>
		<title>About</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
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
	</body>
</html>