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
        <?php 
            require_once('includes/config.php');
            include 'includes/header.php';
        ?>
	</head>

	<body>
        <header>
            <img src="images/Logo.png" alt="Logo">
        </header>
        <?php
            global $current_page;
            $current_page = "Blog";
            include "includes/nav.php"
        ?>
        <div id="wrapper" class="container">
            <div class="col-sm-3">
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
            <div class="col-sm-9">
                <?php
                    try {
                        $sql = $mysqli->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                        while($row = $sql->fetch_assoc()){
                            echo '<div>';
                            
                            echo '<h1 id='.$row['postID'].'><a href="showpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                            
                            echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                            
                            echo '<p>'.$row['postDesc'].'</p>';				
                            echo '<p><a href="showpost.php?id='.$row['postID'].'">Read More</a></p>';		
                            echo '</div>';
                        }
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                ?>
            </div>

        </div>
        
	</body>
</html>