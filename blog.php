<?php
    session_start();
?>
<!DOCTYPE html>
<!--some code adapted from https://github.com/daveismyname/simple-blog-part-1-build-->
<html>
	<head>
		<title>Blog</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/blog.css">
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
        <div id="wrapper" class="container blog">
            <div class="add-delete">
            <?php
                if (isset($_SESSION['logged_user_by_sql'])) {
                    echo "<form method='post' action='addpost.php'><input class='button' type='submit' name='add' value='Add Post'></form>";
                    echo "<form method='post' action='removepost.php'><input class='button' type='submit' name='remove' value='Remove Post'></form>";
                }
            ?>
            </div>
            <div class="col-sm-3">
                <div class="side_nav">
                    <h1>Blog Posts</h1>
                    <ul>
                        <?php
                            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                            $sql = $mysqli->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                            while($row = $sql->fetch_assoc()){
                                echo '<li><a href=#'.$row['postID'].'>'.$row['postTitle'].'</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <?php
                    try {
                        $sql = $mysqli->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                        while($row = $sql->fetch_assoc()){
                            echo '<div>';
                            
                            echo '<h1 id='.$row['postID'].'><a href="showpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                            
                            echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                            
                            echo '<p>';
                            echo $row['postDesc'];	
                            echo '</p>';
                            
                            echo '<p><a href="showpost.php?id='.$row['postID'].'">Read More</a></p>';		
                            
                            echo '</div>';
                        }
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                ?>
            </div>

        </div>
        
        <footer>
        </footer>
	</body>
</html>