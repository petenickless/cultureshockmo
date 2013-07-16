<?php

/*
Theme Name: reggaecity
Author: 1UPDesign
Author URI: http://1updesign.org/
Version: 1.0

Page: home.php
*/

?>
<?php get_header(); ?>
<div id="home_text" class="section">
	<?php
	//Get home page
	wp_reset_query();
	$page = get_page_by_title('home'); 
	setup_postdata($page); 
	the_content();
	?>
</div> <!--#home_text-->
	<div class="section" id="three_column_home">
		<div class="three_column_box" id="caption">
			<div class="contents" id="twitter_feed">
				<?php   
// get_twitter_feed("http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=cultureShockMo", 1); ?>
				<div class="caption">
					<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/twitter_logo.png" class="left">
					<a href="https://twitter.com/#!/cultureShockMo"><span 
class="title">Latest from Twitter</span></a>
				</div>
			</div>
		</div>
		<?php 
		$args = array( 'posts_per_page' => 1,);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'home-blog-teaser'); ?>
		<?php $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>
		<div rel="<?php echo $alt; ?>" id="home_blog_teaser_img" style="background-image:url('<?php echo $img[0]; ?>');"></div>
		<div class="three_column_box" id="caption_mask">
			<div class="caption">
				<a href="<?php the_permalink(); ?>">
					<div class="title"><span>Latest: </span><?php the_title(); ?></div>
				</a>
			</div>
		<?php endwhile; ?>
		</div>
		<div class="three_column_box" id="filled">
			<div class="contents">
				<h1>Live performance</h1>
				<h2>Sat 9th of June @ 8pm</h2>
				<h3>St Anne’s Church, Moseley</h3>
				<h3>Free Entry, Free Food!</h3>
			</div>
		</div>
		<div class="page_break"></div>
	</div>
	<div class="section" id='about'>
		<?php
		//Get home page
		wp_reset_query();
		$page = get_page_by_title('about culture shock'); 
		setup_postdata($page); ?>
		<h1>About Culture Shock</h1>
		<h1 id="event_date">4-9th June 2012</h1>
		<div class="clearboth"></div>
		<?php the_content(); ?>
		<div class="page_break"></div>
	</div> <!--#about-->
	<div class="section" id='venue'>
		<?php
		//Get home page
		wp_reset_query();
		$page = get_page_by_title('venue'); 
		setup_postdata($page); ?>
		<h1>Venue</h1>
		<?php the_content(); ?>
		<div class="clearboth"></div>
		<div class="page_break"></div>
	</div> <!--#about-->
	<div class="section" id='contact'>
		<?php
		//Get home page
		wp_reset_query();
		$page = get_page_by_title('venue'); 
		setup_postdata($page); ?>
		<h1>Contact Us</h1>
			<div id="contact_text" class="left">
				<?php wp_reset_query();
				$page = get_page_by_title('contact'); 
				setup_postdata($page); 
				the_content();
				?>	
			</div>
			<?php if(!$_POST['cf_email']): ?>
			<form id="contact_form" action="" method="post" accept-charset="utf-8">
				<p>
					<label for="cf_email">Email:</label>
					<input type="text" name="cf_email" value="" id="cf_email" class="required email">
				</p>
				<p>
					<label for="cf_name">Name:</label>
					<input type="text" name="cf_name" value="" id="cf_name" class="required" minlength="2">
				</p>
				<p>
					<label for="cf_query">Your Query</label><br/>
					<textarea name="cf_query" value="" id="cf_query"></textarea>
				</p>
				<p><input type="submit" value="Send &rarr;"></p>
			</form>
			<?php else: ?>
			<div id="contact_form">
				<p style="color:red;">Thanks for contacting us, we'll be in touch very soon.  </p>
			</div>
			<?php endif; ?>
		<?php
			$name        = $_REQUEST['cf_name'];
			$email        = $_REQUEST['cf_email'];
			$query        = $_REQUEST['cf_query'];
			$website	= 'Culture Shock';

			$to      = "petenickless@gmail.com";
			$subject = 'URGENT enquiry from the '.$website.' website';
			$message = 'A query was sent by '.$name.' using the '.$website.' website contact form.'."\r\n".'Their query was'."\r\n".$query."\r\n".'Email Address: '.$email."\r\n";
			$headers = 'From: info@cultureshockmoseley.co.uk' . "\r\n" .
			    'Reply-To: webmaster@example.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

			if($email) mail('petenickless@gmail.com', $subject, $message, $headers);
		?>
		<div class="clearboth"></div>
		<div class="page_break"></div>
	</div> <!--#about-->
<?php get_footer(); ?>
