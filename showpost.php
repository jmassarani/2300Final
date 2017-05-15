<?php
    session_start();
    require('includes/config.php'); 
    require_once('includes/config.php');
    include 'includes/header.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = $id");

    $row = $result->fetch_assoc();
    //if post does not exists redirect user.
    if($row['postID'] == ''){
        header('Location: ./');
        exit;
    }
?>
<!--some code adapted from https://github.com/daveismyname/simple-blog-part-1-build-->
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Blog - <?php echo $row['postTitle'];?></title>
        <link rel="stylesheet" href="styles/blog.css">
<!--
        <link rel="stylesheet" href="style/normalize.css">
        <link rel="stylesheet" href="style/main.css">
-->
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
        <div id="wrapper" class="container blog">
            <p><a href="blog.php">Return To Blog Home</a></p>


            <?php	
                echo '<div>';
                    echo '<h1>'.$row['postTitle'].'</h1>';
                    echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
                    echo '<p>'.$row['postCont'].'</p>';	echo '<p>'.$id.'</p';
                    echo '<br>';
                
                echo '</div>';
        
        
            ?>
            
        </div>

    </body>
</html>