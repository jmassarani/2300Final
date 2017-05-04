<?php
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/form.css">
        <?php 
        require_once('includes/config.php');
        include 'includes/header.php';
    ?>
    </head>

    <body class = "contact">
        <header>
            <img src="images/Logo.png" alt="Logo">
        </header>
        <?php
            global $current_page;
            $current_page = "Contact";
            include "includes/nav.php"
        ?>
        <div class="container">
            <form class = "contact_form" method = post>
                <div class="field">
                    <label>Name</label>
                    <input name="name" placeholder="Enter Your Name" required>*
                </div>
                <div class="field">
                    <label>Email</label>
                    <input name="email" type="email" placeholder="Enter Your Email" required>*
                </div>
                <div class="field">
                    <label>Phone Number</label>
                    <input name="phone" type="text" placeholder="(Optional)">
                </div>
                <div class="field">
                    <label>Message</label>
                    <textarea name="message" placeholder="Type Here" required></textarea>
                </div>
                <input id="submit" name="submit" type="submit" value="Submit"> 
            </form>
        </div>
    </body>

    
    <?php
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email');
    $phone_number = filter_input(INPUT_POST,'phone');
    $message = filter_input(INPUT_POST,'message');
    
    ?>
</html>