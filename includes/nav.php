<!--<script src="../js/navbar.js"></script>-->
<nav id="nav_bar">
    <ul>
        <?php
            $nav_items = array (
                "Home"=>"home.php",
                "About"=>"about.php",
                "Contact"=>"contact.php",
                "Blog"=>"blog.php",
                "More"=>"more.php"
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

