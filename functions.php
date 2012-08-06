<?php
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'home-blog-teaser', 100, false );
}

function get_catID($slug) {
$idObj = get_category_by_slug($slug); 
return $id = $idObj->term_id;
}

function p($objoect) {
	?><pre><?php
	print_r($objoect);
	?></pre><?php
}

function get_twitter_feed($rss_feed_url, $max) {
	$count = 0;
	$xml = simplexml_load_file($rss_feed_url);
	foreach($xml->channel->item as $tweet){
		if($count < $max) { ?>
			<div class="tweet_date"><strong><?php //echo date("m.d.y", $tweet->pubDate); 
?></strong></div>
			<div class='tweet_text'><?php echo $tweet->description; ?></div>
		<?php $count++; ?>
	<?php }
	}
}

?>
