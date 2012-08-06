<?php

/*
Theme Name: cultureshock
Author: 1UPDesign
Author URI: http://1updesign.org/
Version: 1.0

Page: nav.php
*/

?>

<?php
$path = $_SERVER['REQUEST_URI'];

$nav_items = array();

if($path == "/"){
	$nav_items[] = array(
		"title" => "Home",
		"url" => "/",
		);
	$nav_items[] = array(
		"title" => "About",
		"url" => "/#about",
		);
	$nav_items[] = array(
		"title" => "Venue",
		"url" => "/#venue",
		);
	$nav_items[] = array(
		"title" => "Contact",
		"url" => "/#contact",
		);
	$nav_items[] = array(
		"title" => "Top",
		"url" => "/#header",
		);
}else{
	$nav_items[] = array(
		"title" => "Home",
		"url" => "/",
		);
}
?><ul id="nav">
	<?php foreach($nav_items as $page):?>
		<a href="<?php echo $page['url'] ?>">
			<li>
				<span class="navitem">
				<?php if($page['title'] == "Home"): ?>
					<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/home.png">
				<?php else: ?>
					<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/nav_arrow.png">
					<?php echo $page['title'] ?>
				<?php endif; ?>
				</span>
			</li>
		</a>
	<?php endforeach ?>
</ul>
