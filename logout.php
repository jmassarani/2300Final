<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/form.css">
        <?php 
            require_once('includes/config.php');
            include 'includes/header.php';
        ?>
	</head>

	<body>
        <?php
            global $current_page;
            $current_page = "Logout";
            include "includes/nav.php"
        ?>
        <div class="container log_out">
            <form method="post">
                <p>Already signed in, want to log out?</p>
                <input type="submit" class="button" name="logout" value="Log Out">
            </form>
            <?php
                if (isset($_POST['logout'])) {
                    unset($_SESSION['logged_user_by_sql']);
                    unset($_SESSION['admin']);
                    session_destroy();
                    header("Location: index.php");
                }
            ?>
        </div>
        <footer>
        </footer>
    </body>
</html>
