<?php
    session_start();
?>

<!doctype html>

<html>
	<head>
		<title>Home</title>
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
            $current_page = "Home";
            include "includes/nav.php"
        ?>
        
        
        <?php
        //adapted from provided code from login.php from piazza
        $post_username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
        $post_password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
        
        if ( empty( $post_username ) || empty( $post_password ) ) {
        ?>
        <div class="log_in">
            <h2>Log In</h2>
            <form action="login.php" method="post">
                <label>Username: </label><input type="text" name="username"><br>
                <label>Password: </label><input type="password" name="password"><br>
                <input type="submit" value="Submit">
        
            </form>
        </div>

        <?php
            } else {
                require_once 'includes/config.php';
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
            
                $result = $mysqli->query("SELECT * FROM users WHERE username='$post_username'");
            
                if ($result && $result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $db_hash_password = $row['hashpassword'];
//                    echo $db_hash_password;
                    
                    
                    if( password_verify( $post_password, $db_hash_password ) ) {
                        $db_username = $row['username'];
                        $_SESSION['logged_user_by_sql'] = $db_username;
//                        echo "matched";
                        
                    }
                }
                
                
                
                $mysqli->close();
                
                if ( isset($_SESSION['logged_user_by_sql'] ) ) {
                    echo "<div class='box3'>";
                    echo "<p>Congratulations. You have successfully signed in!<p>";
                    echo "</div>";
                }
                else {
                    echo "<div class='box3'>";
                    echo "<p>You did not login successfully.</p>";
                    echo "<p>Please <a href='login.php'>try again</a></p>";
                    echo "</div>";
                    
                }
//            $hashed_password = password_hash("schmooze", PASSWORD_DEFAULT) . '<br>';
//            echo "<p>Hashed password: $hashed_password</p>";
            }
        ?>
        <div class="create_user">
            <form method="post" action="login.php">
                <h2>Are you new to this site and want to create an account?</h2>
                <label>First Name:</label><input type="text" name="fname"><br>
                <label>Last Name:</label><input type="text" name="lname"><br>
                <label>Email:</label><input type="text" name="email"><br>
                <label>Username:</label><input type="text" name="username"><br>
                <label>Password:</label><input type="password" name="password1"><br>
                <label>Repeat Password:</label><input type="password" name="password2"><br>
                <input type="submit" name="createnew" value="Create Account">

            </form>
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
                    elseif (empty($_POST['password1'])) {
                        echo "<p>Please enter a password</p>";
                    }
                    elseif (empty($_POST['password2'])) {
                        echo "<p>Please re-enter your password</p>";
                    }
                    else {
                        $fname = htmlspecialchars(trim($_POST['fname']));
                        $lname = htmlspecialchars(trim($_POST['lname']));
                        $email = htmlspecialchars(trim($_POST['email']));
                        $username = htmlspecialchars(trim($_POST['username']));
                        $p1 = htmlspecialchars(trim($_POST['password1']));
                        $p2 = htmlspecialchars(trim($_POST['password2']));
                        
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
//                            $hashed = password_hash($p1, PASSWORD_DEFAULT);
                            $hashed = password_hash($p1, PASSWORD_DEFAULT) . '<br>';
                            
                            $add_user = $mysqli->query("INSERT INTO users(firstname,lastname,email,username,hashpassword,privilege) VALUES ('$fname','$lname','$email','$username','$hashed','viewer')");
                            echo "<p>Your account has been created</p>";
                        }
                    }
                    
                }
            
                ?>
        </div>
        
    </body>
</html>
