<?php
/*
Plugin Name: Custom CSS for Posts and Pages (CCSS)
Plugin URI: http://webtoolkit4.me
Description: An easy way to include custom stylesheets per post/page
Version: 1.0
Author: Gerasimos Tsiamalos
Author URI: http://webtoolkit4.me/


Copyright 2010  Gerasimos Tsiamalos  (email : tsiger@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* CHANGE THE FOLLOWING IF YOU NEED A DIFFERENT PATH IT MUST BE A SUBDIR IN YOUR THEME'S FOLDER */
define('CCSS_PATH','/custom/');
/* AND THAT'S ABOUT IT */

define('CCSS_VERSION','1.0');

function ccss_box() {
 add_meta_box( 'custom-css', 'Use a custom stylesheet for this post?', 'ccss_add_box', 'post', 'normal','high' );
 add_meta_box( 'custom-css', 'Use a custom stylesheet for this page?', 'ccss_add_box', 'page', 'normal','high' );
  add_meta_box( 'custom-css', 'Use a custom stylesheet for this interview?', 'ccss_add_box', 'interview', 'normal','high' );
}

function ccss_add_box() {
  global $post_ID;
  $current = get_post_meta($post_ID, 'css_sheet', 'true'); 
  $dir_url = get_stylesheet_directory() . '/assets/css'	. CCSS_PATH;
  echo "Select your custom stylesheet: ";
  echo "<select id='ccss' name='ccss'>";
  echo "<option value='-1'>Select a stylesheet</option>";  
  if ($handle = opendir($dir_url)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if ($current != $file) {
             echo "<option value='". $file . "'>" . $file . "</option>";
            }
            else {
             echo "<option value='". $file . "' selected='selected'>" . $file . "</option>";
            }
        }
    }
    closedir($handle);
   } 
  echo "</select>";
} 

function ccss_save() {	
	global $post_ID;

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
	if (!current_user_can( 'edit_post', $post_id ) ) return $post_id;

	$id = $_POST['post_ID'];
	$css_sheet = $_POST['ccss'];
	
	// no need to keep extra info in db for posts/pages without an extra stylesheet.
	if ($css_sheet != '-1') {
 	update_post_meta($id, 'css_sheet', $css_sheet);
 }
 else {
  delete_post_meta($id, 'css_sheet');
 }
}

function ccss_include() {
 global $wp_query;
 $id = $wp_query->post->ID;
 $the_sheet  = get_post_meta($id, 'css_sheet','true'); 
 $the_path   = get_template_directory_uri().'/assets/css';
 $the_output = $the_path . CCSS_PATH . $the_sheet;
 if ($the_sheet) {
  echo '<link rel="stylesheet" href="' . $the_output . '" type="text/css" media="screen" />'; 
  // if (is_single() || is_page()) echo '<link rel="stylesheet" href="' . $the_output . '" type="text/css" media="screen" />';  
 }
}

// oi! wait! where are you going? are you sure? 100%? a second thought? come on let's talk about it. oh well.
function ccss_uninstall() {
			global $wpdb;	
			$wpdb->query($wpdb->prepare("DELETE FROM $wpdb->postmeta WHERE meta_key = 'css_sheet'"));
}

add_action('admin_menu', 'ccss_box');
add_action('save_post', 'ccss_save');
add_action('wp_head','ccss_include');
register_uninstall_hook(__FILE__, 'ccss_uninstall');
?>