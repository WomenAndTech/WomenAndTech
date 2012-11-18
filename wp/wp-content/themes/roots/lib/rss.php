<?php

/*
 * Custom RSS feed
 * 
 * with thanks to: 
 * http://www.456bereastreet.com/archive/201103/controlling_and_customising_rss_feeds_in_wordpress/
 */

// Disable automatic feeds
remove_action( 'do_feed_rdf', 'do_feed_rdf', 10, 1 );
remove_action( 'do_feed_rss', 'do_feed_rss', 10, 1 );
remove_action( 'do_feed_rss2', 'do_feed_rss2', 10, 1 );
remove_action( 'do_feed_atom', 'do_feed_atom', 10, 1 );

/* 
* If you're not removing feed links via lib/cleanup
* make sure you uncomment the lines below
*/
// Remove automatic links to feeds
//remove_action('wp_head', 'feed_links', 2);
//remove_action('wp_head', 'feed_links_extra', 3);

// Create custom feed from template
function create_custom_feed() {
    load_template( TEMPLATEPATH . '/feeds/feed-rss2.php');
}

// Replace default feed rewrite rules
function customise_feed_rules($rules) {
    // Remove all feed related rules
    $filtered_rules = array_filter($rules, function($rule) {
        return !preg_match("/feed/i", $rule);
    });
    // Add the rule(s) for your custom feed(s)
    $new_rules = array(
        'feed$' => 'index.php?feed=custom_feed'
    );
    return $new_rules + $filtered_rules;
}

// Add the custom feed and update rewrite rules
function add_custom_feed() {
    global $wp_rewrite;
    add_action('do_feed_custom_feed', 'create_custom_feed', 10, 1);
    add_filter('rewrite_rules_array','customise_feed_rules');
    $wp_rewrite->flush_rules();
}

add_action('init', 'add_custom_feed');