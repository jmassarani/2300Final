<?php
    session_start();
?>

<?php
            require_once 'includes/config.php';
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if ((isset($_POST['remove'])) && !empty($_POST['option'])) {
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
          // Check connection
                if ($mysqli->connect_errno) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $removals = $_POST['option'];
                foreach ($removals as $postID) {
                    $remove = "DELETE FROM blog_posts WHERE postID = $postID";
                    $result = $mysqli->query($remove);
                        
                            
                }
            }
        ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Remove Post</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/form.css">
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
        <div id="remove" class="container">
            <p><a href="blog.php">Return To Blog Home</a></p>

        <h1>Remove Blog Posts</h1>
        <form method="post">
        <?php
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql = $mysqli->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
        echo "<div id='remove_buttons'>";
        while($row = $sql->fetch_assoc()){
            $blog_title = $row['postTitle'];
            $blog_id = $row['postID'];

            echo "<p><input type='checkbox' name='option[]' value='$blog_id'>$blog_title</p>";
        }
        echo '</div>';
        
        ?>
         <input class="button" type="submit" name="remove" value="Remove Blog Post"></form> 
            
        
        </div>

        <footer>
        </footer>
	</body>
</html>