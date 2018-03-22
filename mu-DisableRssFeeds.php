<?php
if(!function_exists('DisableWpFeed')){
	function DisableWpFeed(){
		wp_die('No feed available');
	}
};

add_action('do_feed','DisableWpFeed',1);
add_action('do_feed_rdf','DisableWpFeed',1);
add_action('do_feed_rss','DisableWpFeed',1);
add_action('do_feed_rss2','DisableWpFeed',1);
add_action('do_feed_atom','DisableWpFeed',1);
add_action('do_feed_rss2_comments','DisableWpFeed',1);
add_action('do_feed_atom_comments','DisableWpFeed',1);

remove_action( 'wp_head','feed_links_extra',3);
remove_action( 'wp_head','feed_links',2);

/*
/?feed=rss
/?feed=rss2
/feed/
/feed/rdf/ > download.rdf
*/
