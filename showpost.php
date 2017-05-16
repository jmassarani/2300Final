<?php
    session_start();
?>
<!DOCTYPE html>
<!--some code adapted from https://github.com/daveismyname/simple-blog-part-1-build-->
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Blog - <?php echo $row['postTitle'];?></title>
        <link rel="stylesheet" href="styles/blog.css">
        <link rel="stylesheet" href="styles/form.css">
        <?php
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

    </head>
    <body>
        <?php
            global $current_page;
            $current_page = "Blog";
            include "includes/nav.php"
        ?>
        <div id="wrapper" class="container blog">
            <p><a href="blog.php">Return To Blog Home</a></p>


            <?php
                //echo full blog post
                echo '<div>';
                    echo '<h1>'.$row['postTitle'].'</h1>';
                    echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
                    echo '<p>'.$row['postCont'].'</p>';
                
                echo '</div>';
        
                //comments div
                echo '<div class="col-sm-6">';
                    echo '<h3>Comments</h3>';
                    if (isset($_SESSION['logged_user_by_sql'])) {
                        //TODO: show this button only if user is an admin
                        echo "<div class='field'><form method='post' action='removecomment.php?id=$id'><input class='button' type='submit' name='removecomment' value='Remove A Comment'></form></div>";
                        echo "<div class='field'> Add a comment:";
                        echo '<form name="comment_form" method="post">';
                        echo '<textarea name="comment"></textarea> </div>';
                        echo '<div class="field"> What name would you like to appear with your comment?';
                        echo '<input name="nickname" type="text"> </div>';
                        echo '<div class="field"> <input class="button" id="submit" name="submit" type="submit"value="Submit"> </div>';
                        echo '</form>';
                        
                        if(isset($_POST['submit'])){
                            //define comment variables
                            $nickname = filter_input(INPUT_POST,'nickname', FILTER_SANITIZE_STRING);
                            $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
                            echo "comment is $comment";
                            $date = date("Y-m-d H:i:s");

                            //add comment to database
                            $mysqli->query("INSERT INTO `comments` (`commentID`, `postID`, `date_time`, `contents`, `nickname`) VALUES (NULL, '$id', '$date', '$comment', '$nickname');");
                        }
                    }
                    else {
                        echo "Please <a href='login.php'>log in</a> to add a comment.";
                    }
        
                    
                    $comment_result = $mysqli->query("SELECT * FROM comments WHERE postID = $id ORDER BY date_time DESC");
                    //show all current comments if there are any
                    if(mysqli_num_rows($comment_result)) {
                        while($comment_row = $comment_result->fetch_assoc()){
                        echo '<h4>'.$comment_row['nickname'].'</h4>';
                        echo $comment_row['date_time'];
                        echo '<p>'.$comment_row['contents'].'</p>';
                    }
                    }
                echo '</div>';//end of comments div
        
            ?>
            
        </div>

        <footer>
        </footer>
    </body>
</html>