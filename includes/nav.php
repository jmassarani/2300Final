<!--<script src="../js/navbar.js"></script>-->
<nav id="nav_bar">
    <ul>
        <?php
            $nav_items = array (
                "Home"=>"index.php",
                "About"=>"about.php",
                "Contact"=>"contact.php",
                "Blog"=>"blog.php"
            );

            function printLink ($title, $link) {
                print ("<li><a ");
                if ($GLOBALS["current_page"] == $title) {
                    $class = "class='active'";
                } else {
                    $class = "";
                }
                print ("$class href='$link'>$title</a></li>");
            }

            foreach($nav_items as $title=>$link) {
                printLink ($title, $link);
            }
            // Blog: Show add new post page if admin login
//            if (isset($_SESSION['logged_user_by_sql'])) {
//                $stmt = $mysqli->stmt_init();
//                $stmt->prepare("SELECT * FROM users WHERE username=?"); $stmt->bind_param('s', $post_username);
//                $stmt->execute();
//                $result=$stmt->get_result();
//
//                if ($result && $result->num_rows == 1) {
//                    $row = $result->fetch_assoc();
//                    $db_hash_password = $row['hashpassword'];
//
//                    if( password_verify( $post_password, $db_hash_password ) ) {
//                        $db_username = $row['username'];
//                        $_SESSION['logged_user_by_sql'] = $db_username;
//
//                    }
////                echo "<li><a class='logout_button";
////                if ($GLOBALS["current_page"] == 'Logout') {
////                    echo " active";
////                }
////                echo "' href='logout.php'>Logout</a></li>";
//            } else {
////                echo "<li><a class='login_button";
////                if ($GLOBALS["current_page"] == 'Login') {
////                    echo " active";
////                }
////                echo "' href='login.php'>Login</a></li>";
//            }
            // More: Dropdown Menu
            print ("<li class='dropdown");
            if ($GLOBALS["current_page"] == 'What is Schmooze?') {
                echo " active";
            } 
            print ("'>More</a><div class='dropdown-content'><a href='more.php'>What is Schmooze?</a></div></li>");
            // Login/Logout Navigation
            if (isset($_SESSION['logged_user_by_sql'])) {
                echo "<li><a class='logout_button";
                if ($GLOBALS["current_page"] == 'Logout') {
                    echo " active";
                }
                echo "' href='logout.php'>Logout</a></li>";
            } else {
                echo "<li><a class='login_button";
                if ($GLOBALS["current_page"] == 'Login') {
                    echo " active";
                }
                echo "' href='login.php'>Login</a></li>";
            }
        ?>
    </ul>
</nav>
