<!DOCTYPE html>
<html>
<?php

/*Creates a navigation menu modified from project 1*/
function createNavMenu($menu_in){
	for ($i =0; $i< sizeof($menu_in); $i++){
		echo '<li><a href="' . $menu_in[$i]['pageUrl'] . '">' . $menu_in[$i]['pageName'] . '</a></li>';
	}}
	

	?>
	<div class = "nav">
		<ul>
			<?php
			$menu = array(0 => array("pageName" => "Home", "pageUrl"=> "home.php"), 
				1 => array("pageName" => "About", "pageUrl"=> "about.php"),
				2 => array("pageName" => "Contact", "pageUrl"=> "contact.php"),
				3 => array("pageName" => "Blog", "pageUrl"=> "blog.php"),
				4 => array("pageName" => "More", "pageUrl"=> "more.php"));

			createNavMenu($menu);
			?>
		</ul>
	</div>
	

	</html>
