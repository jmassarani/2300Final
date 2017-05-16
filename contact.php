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
        require_once('includes/email.php');
        include 'includes/header.php';
    ?>
    </head>

    <body class = "contact">
        <?php
            global $current_page;
            $current_page = "Contact Us";
            include "includes/nav.php"
        ?>
        <div class="container">
            <div class="home col-sm-6">
            <form class = "contact_form" method = post>
                <h2>How can we help you connect?</h2>
                <h4>In need of a Schmoozer? Send us a message!</h4>
                <div class="field">
                    <label>Name *</label>
                    <input name="name" id="name_field" placeholder="Enter Your Name" required>
                </div>
                <div class="field">
                    <label>Email *</label>
                    <input name="email" id="email_field" type="email" placeholder="Enter Your Email" required>
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
                    
                <input id="submit" class="button" name="submit" type="submit" value="Submit"> 
                </div>
            </form>
            
            <?php
            //write email to company
            if(isset($_POST['submit'])) {
                //user info from form
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
                
                $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
                $phone = filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT);
                $message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_SPECIAL_CHARS);

                //format email to be sent
                $full_message = "Hello! You have a new message from queenofschmooze.com. A user has submitted the following information:\n\nName: $name\n\nEmail address: $email\n\nPhone number: $phone\n\nMessage:\n$message";
                
                //send email to company
                mail(CONTACT_EMAIL, "Queen of Schmooze Message from $name", $full_message);
                
                if(@mail(CONTACT_EMAIL, "Queen of Schmooze Message from $name", $full_message)) {
                    echo "Your message has been sent!";
                } else{
                    echo "Sorry, your message could not be sent at this time.";
                }
                
            } //end of if message submitted
            ?>
            </div> <!-- end of first form -->
            
            <div class="home col-sm-6">
            <form class = "contact_form" method = post>
                <h2>Join our mailing list!</h2>
                <h4>Enter your contact info for the lastest schmoozing tips!</h4>
                <div class="field">
                    <label>Name *</label>
                    <input name="name" id="list_name_field" placeholder="Enter Your Name" required>
                </div>
                <div class="field">
                    <label>Email *</label>
                    <input name="email" id="list_email_field" type="email" placeholder="Enter Your Email" required>
                </div>
                <div class="field">
                    <label>Phone Number</label>
                    <input name="phone" id="list_phone_field" type="text" placeholder="(Optional)">
                </div>
                <div class="field">
                    <label>Message:</label>
                    <textarea name="message" placeholder="Type Here" required></textarea>
                </div>
                <div class="field">
                    
                <input id="list_submit" class="button" name="submit" type="submit" value="Submit"> 
                </div>
            </form>
            </div> <!-- end of second form -->
        </div> <!-- end of container div -->
        
        <footer>
        </footer>
    </body>
</html>