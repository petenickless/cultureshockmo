<?php

/*
Theme Name: reggaecity
Author: 1UPDesign
Author URI: http://1updesign.org/
Version: 1.0

Page: single.php
*/

?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="section">
	<h1><?php the_title(); ?></h1>
		<span id="date"><?php the_time('j M Y'); ?></span>
		<?php the_content(); ?>
		<div class="clearboth"></div>
		<div class="page_break"></div>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>
