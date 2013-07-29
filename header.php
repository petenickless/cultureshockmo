<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
	<link rel="image_src" href="<?php bloginfo('stylesheet_directory') ?>/assets/images/logo_social_img.png" / >
	<title>
		<?php
		if ( is_single() ) 
			{ 
				single_post_title();  print ' | '; bloginfo(naem);
			}      
		elseif ( is_home() || is_front_page() )
			{ 
				bloginfo('name'); print ' | '; bloginfo('description'); 
			}
		elseif ( is_page() ) 
			{ 
				single_post_title(''); print ' | '; bloginfo(naem);
			}
		elseif ( is_search() )
			{ 
				bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); 
			}
		elseif ( is_404() ) 
			{ 
				bloginfo('name'); print ' | Not Found'; 
			}
		else 
			{ 
				bloginfo('name'); wp_title('|');
			}
		?>
	</title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/useful.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/jquery.jscroll.js" type="text/javascript" charset="utf-8"></script>	
	<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("#contact_form").validate();
			$("#nav").jScroll({top : 100, speed: 'slow'});
			$("#slider").cycle({
			       //  before: function() {  
			       //      $('#slider-caption').html(this.title); 
			       //      if($("#slider-caption").attr('class') == "left-caption"){
			   				// $('#slider-caption').removeClass("left-caption");
			       //      	$('#slider-caption').addClass("right-caption");
			       //      }else{
			       //      	$('#slider-caption').removeClass("right-caption");
			       //      	$('#slider-caption').addClass("left-caption");
			       //      }  
			       //  }
			});
		});
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<?php get_template_part('nav'); ?>
	<div id="header" class="container">
		<a href="/"><img src="<?php bloginfo('stylesheet_directory') 
?>/assets/images/logo6.png"></a>
	</div> <!--#header-->
	<div id="wrap">
		<div class="container">
	
	
	
