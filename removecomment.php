<?php
    session_start();
?>

<?php
            require_once 'includes/config.php';
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $id = $_GET['id'];
            if ((isset($_POST['remove'])) && !empty($_POST['option'])) {
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
          // Check connection
                if ($mysqli->connect_errno) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $removals = $_POST['option'];
                foreach ($removals as $commentID) {
                    $mysqli->query("DELETE FROM comments WHERE commentID = $commentID");
                        
                            
                }
            }
        ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Remove Comment</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/home.css">
        <?php 
            require_once('includes/config.php');
            include 'includes/header.php';
        ?>
	</head>

	<body>
        <?php
            global $current_page;
            $current_page = "Blog";
            include "includes/nav.php"
        ?>
        <div id="remove">
        <h1>Remove A Comment</h1>
        <form method="post">
        <?php
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql = $mysqli->query("SELECT * FROM comments WHERE postID = $id ORDER BY date_time DESC");
        echo "<div id='remove_buttons'>";
        while($row = $sql->fetch_assoc()){
            $contents = $row['contents'];
            $comment_id = $row['commentID'];
            $nickname = $row['nickname'];

            echo "<input type='checkbox' name='option[]' value='$comment_id'>$nickname: \"$contents\"<br>";
        }
        echo '</div>';
        
        ?>
        <input type="submit" name="remove" value="Remove Comment"></form>
        <?php
        echo '<br><a href="showpost.php?id='.$id.'">Return to Post</a><br>';
        ?>
        <a href="blog.php">Return to Blog</a>    
        
        </div>

        <footer>
        </footer>
	</body>
</html>