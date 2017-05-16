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
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css"
    rel="stylesheet" type="text/css" />
        <?php 
    require_once('includes/config.php');
    include 'includes/header.php';
?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	</head>

	<body>
        <?php
            global $current_page;
            $current_page = "Login";
            include "includes/nav.php"
        ?>
        
        
        <div class="container">
            <?php
            //adapted from provided code from login.php from piazza
            $post_username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
            $post_password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );

            if ( empty( $post_username ) || empty( $post_password ) ) {
            ?>
            <div class="log_in col-sm-6">
                <h2>Log In</h2>
                <form action="login.php" method="post">
                    <div class="field">
                        <label>Username: </label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="field">
                        <label>Password: </label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="button" value="Submit" name = "login">
                    </div>
                </form>
            </div>

            <?php
                } else {
                    require_once 'includes/config.php';
                    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

                    $stmt = $mysqli->stmt_init();
                    $stmt->prepare("SELECT * FROM users WHERE username=?"); $stmt->bind_param('s', $post_username);
                    $stmt->execute();
                    $result=$stmt->get_result();

                    if ($result && $result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        $db_hash_password = $row['hashpassword'];

                        if( password_verify( $post_password, $db_hash_password ) ) {
                            $db_username = $row['username'];
                           
                            if($row['privilege'] == 'admin'){ $_SESSION['admin'] = $db_username;
                            }
                            else { $_SESSION['logged_user_by_sql'] = $db_username;
                            }
                        } //if password matches, start session
                    }


                    $mysqli->close();

                    if ( isset($_SESSION['logged_user_by_sql'] ) ) {
                        echo "<div class='box3'>";
                        echo "<p>Congratulations. You have successfully signed in!<p>";
                        echo "</div>";
                    }
                    else if ( isset($_SESSION['admin'] ) ) {
                        echo "<div class='box3'>";
                        echo "<p>Congratulations. You have successfully signed in! You have admin privileges.<p>";
                        echo "</div>";
                    }
                    else {
                        if (!isset($_POST["createnew"])){
                        echo "<div class='box3'>";
                        echo "<p>You did not login successfully.</p>";
                        echo "<p>Please <a href='login.php'>try again</a></p>";
                        echo "</div>";
                        }
                    }
                }
            ?>
            
            
            <div class="create_user col-sm-6">
            <h2>Are you new to this site and want to create an account?</h2>
            <form method="post" action="login.php" id = "registration">
                <div class="field">
                    <label>First Name:</label>
                    <input type="text" name="fname" data-validation="length alphanumeric" data-validation-length="1-12" data-validation-error-msg="User name has to be an alphanumeric value (1-12 chars)">
                </div>
                <div class="field">
                    <label>Last Name:</label>
                    <input type="text" name="lname" data-validation="length alphanumeric" data-validation-length="1-12" data-validation-error-msg="User name has to be an alphanumeric value (1-12 chars)">
                </div>
                <div class="field">
                    <label>Email:</label>
                    <input type="text" name = "email"  data-validation="email" data-validation-error-msg="You did not enter a valid e-mail">
                </div>
                <div class="field">
                    <label>Username:</label>
                    <input type="text" name="username"  data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                </div>
                <div class="field">
                    <label>Password:</label>
                    <input type="password" name="password_confirmation" data-validation="strength" 
		 data-validation-strength="1">
                </div>
                <div class="field">
                    <label>Repeat Password:</label>
                    <input type="password" name="password" data-validation="confirmation" >
                </div>
                <div class="field">
                    <input type="submit" class="button" name="createnew" value="Create Account">
                </div>

            </form>
                <script> 
            $( document ).ready(function() {
            $.validate({
            form : '#registration',
                modules: 'security',
                errorMessagePosition : 'top',
                onError : function($form) {
                return false;
            }
                
            });
            });
            
            </script>
                <?php
                require_once 'includes/config.php';
                $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
                if (isset($_POST["createnew"])) {
                    if (empty($_POST['fname'])) {
                        echo "<p>Please enter your first name</p>";
                    }
                    elseif (empty($_POST['lname'])) {
                        echo "<p>Please enter your last name</p>";
                    }
                    elseif (empty($_POST['email'])) {
                        echo "<p>Please enter an email</p>";
                    }
                    elseif (empty($_POST['username'])) {
                        echo "<p>Please enter a username</p>";
                    }
                    elseif (empty($_POST['password_confirmation'])) {
                        echo "<p>Please enter a password</p>";
                    }
                    elseif (empty($_POST['password'])) {
                        echo "<p>Please re-enter your password</p>";
                    }
                    else {
                        $fname = htmlspecialchars(trim($_POST['fname']));
                        $lname = htmlspecialchars(trim($_POST['lname']));
                        $email = htmlspecialchars(trim($_POST['email']));
                        $username = htmlspecialchars(trim($_POST['username']));
                        $p1 = htmlspecialchars(trim($_POST['password_confirmation']));
                        $p2 = htmlspecialchars(trim($_POST['password']));
                        
                        $flag = true;
                        //if password1 and password2 dont match
                        if ($p1 != $p2) {
                            echo "<p>Error: Passwords do not match</p>";
                            $flag = false;
                        }
                        //if email already exists
                        $email_exists = $mysqli->query("SELECT email FROM users");
                        while ($row = $email_exists->fetch_assoc()) {
                            $check = $row['email'];
                            if ($email == $check) {
                                echo "<p>There is already an account associated with this email</p>";
                            $flag = false;}
                        }
                        //if username already exists
                        $username_exists = $mysqli->query("SELECT username FROM users");
                        while ($row = $username_exists->fetch_assoc()) {
                            $check = $row['username'];
                            if ($username == $check) {
                                echo "<p>This username has already been taken. Please choose another</p>";
                            $flag = false;}
                        }
                        //create account

                        if ($flag == true) {
                            //hash password

                            $hashed = password_hash($p1, PASSWORD_DEFAULT);
                            
                            $add_user = $mysqli->query("INSERT INTO users(firstname,lastname,email,username,hashpassword,privilege) VALUES ('$fname','$lname','$email','$username','$hashed','viewer')");
                            echo "<p>Your account has been created</p>";
                            echo "<p>Please <a href='login.php'>login here</a></p>";
                        }
                    }         
                }
                ?>
            </div>
        </div>
        <footer>
        </footer>
        
    </body>
</html>
