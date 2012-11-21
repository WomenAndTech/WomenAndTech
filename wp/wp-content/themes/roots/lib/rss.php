<?php

/*
 * Custom RSS feed
 * 
 * NOTE: The RDF, RSS 1.0 and Atom feeds still 
 * exist without custom content, we just don't
 * link to them.
 * 
 */

/* 
* If you're not removing feed links via lib/cleanup
* make sure you uncomment the lines below
*/
// Remove automatic links to feeds
//remove_action('wp_head', 'feed_links', 2);
//remove_action('wp_head', 'feed_links_extra', 3);


// Remove WP default RSS feed
remove_all_actions( 'do_feed_rss2' );

// Add our own custom RSS feed template in place
add_action( 'do_feed_rss2', 'custom_content_feed', 10, 1 );

function custom_content_feed( $for_comments ) {
    $rss_template = get_template_directory() . '/feeds/feed-rss2.php';
    if( file_exists( $rss_template ) )
        load_template( $rss_template );
    else
        do_feed_rss2( $for_comments ); // Call default function
}
