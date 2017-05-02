<?php
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <?php 
        require_once('includes/config.php');
        include 'includes/header.php';
    ?>
    </head>

    <body class = "contact">
        <header>
            <h1>Queen of Schmooze</h1>
        </header>
        <?php
            global $current_page;
            $current_page = "Contaact";
            include "includes/nav.php"
        ?>
        <form class = "contact_form" method = post>
            <label>Name</label>
            <input name="name" placeholder="Enter Your Name" required>*
            <label>Email</label>
            <input name="email" type="email" placeholder="Enter Your Email" required>*

            <label>Phone Number</label>
            <input name="phone" type="text" placeholder="(Optional)">
            <label>Message</label>
            <textarea name="message" placeholder="Type Here" required></textarea>
            <input id="submit" name="submit" type="submit" value="Submit"> </form>
    </body>

    
    <?php
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email');
    $phone_number = filter_input(INPUT_POST,'phone');
    $message = filter_input(INPUT_POST,'message');
    
    ?>
</html>