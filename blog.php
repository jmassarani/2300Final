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
            <h1>Queen of Schmooze</h1>
        </header>
        <?php
            global $current_page;
            $current_page = "Blog";
            include "includes/nav.php"
        ?>
        <div id="wrapper">

		<h1>Blog</h1>
		<hr />

		<?php
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			try {
				$sql = $mysqli->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
				while($row = $sql->fetch_assoc()){
					
					echo '<div>';
						echo '<h1><a href="showpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
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
        
        
	</body>
</html>