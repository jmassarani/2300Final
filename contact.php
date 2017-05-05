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
                <h2>How Can We Help You Connect With Others?</h2>
                <div class="field">
                    <label>Name</label>
                    <input name="name" id="name_field" placeholder="Enter Your Name" required>*
                </div>
                <div class="field">
                    <label>Email</label>
                    <input name="email" id="email_field" type="email" placeholder="Enter Your Email" required>*
                </div>
                <div class="field">
                    <label>Phone Number</label>
                    <input name="phone" id="phone_field" type="text" placeholder="(Optional)">
                </div>
                <div class="field">
                    <label>Message:</label>
                    <br>
                    <textarea name="message" placeholder="Type Here" required></textarea>
                </div>
                <div class="field">
                    
                <input id="submit" name="submit" type="submit" value="Submit"> 
                </div>
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