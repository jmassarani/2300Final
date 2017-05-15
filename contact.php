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
        <?php
            global $current_page;
            $current_page = "Contact";
            include "includes/nav.php"
        ?>
        <div class="container">
            <div class="home col-sm-6">
            <form class = "contact_form" method = post>
                <h2>How can we help you connect?</h2>
                <h4>In need of a Schmoozer? Send us a message!</h4>
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
            </div> <!-- end of first form -->
            
            <div class="home col-sm-6">
            <form class = "contact_form" method = post>
                <h2>Join our mailing list!</h2>
                <h4>Enter your contact info for the lastest schmoozing tips!</h4>
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
            </div> <!-- end of second form -->
        </div> <!-- end of container div -->
    </body>

    
    <?php
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email');
    $phone_number = filter_input(INPUT_POST,'phone');
    $message = filter_input(INPUT_POST,'message');
    
    ?>
</html>