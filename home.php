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
	<div class="slider-wrap">
		<div id="slider-caption"></div>
		<div class="section" id="slider">
			<?php $args = array( 'post_type' => 'home-slider',);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'home-slider'); ?>
				<div class="slider-frame" style="background-image:url('<?php echo $img[0] ?>');" title="<?php the_title() ?>">
				
				</div>
			<?php endwhile; ?>
		</div>	
	</div>
			<div class="page_break"></div>
	<div class="clearboth"></div>

	<div class="section" id='about'>
		<?php
		//Get home page
		wp_reset_query();
		$page = get_page_by_title('about culture shock'); 
		setup_postdata($page); ?>
		<h1>About Culture Shock</h1>
		<h1 id="event_date">23rd-27th Sept 2013</h1>
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
	<div class="section" id='cs2012'>
		<?php
		//Get home page
		wp_reset_query();
		$page = get_page_by_title('culture shock 2012'); 
		setup_postdata($page); ?>
		<h1>Culture Shock 2012</h1>
		<?php the_content(); ?>
		<div class="page_break"></div>
	</div> <!--#cs2012-->
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
