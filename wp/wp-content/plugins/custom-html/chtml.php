<?php
/*
Plugin Name: Custom HTML/PHP for Posts and Pages
Plugin URI: http://brttb.com
Description: An easy way to include custom HTML/PHP per post/page
Version: 1.0
Author: Brett Bergmann
Author URI: http://brttb.com/

Uses Code From:

Custom CSS for Posts and Pages (CCSS)
by: Gerasimos Tsiamalos
http://webtoolkit4.me

Updated Copyright 2012  Brett Bergmann  (email : me@brettbergmann.com)
Original Copyright 2010  Gerasimos Tsiamalos  (email : tsiger@gmail.com)

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

define('CHTML_PATH','/custom-content/');

define('CHTML_VERSION','1.0');

function CHTML_box() {
 add_meta_box( 'custom-content', 'Use custom content for this post?', 'CHTML_add_box', 'post', 'normal','high' );
 add_meta_box( 'custom-content', 'Use custom content for this page?', 'CHTML_add_box', 'page', 'normal','high' );
  add_meta_box( 'custom-content', 'Use custom content for this interview?', 'CHTML_add_box', 'interview', 'normal','high' );
}

function CHTML_add_box() {
  global $post_ID;
  $current = get_post_meta($post_ID, 'html_file', 'true'); 
  $dir_url = get_stylesheet_directory()	. CHTML_PATH;
  echo "This file overwrites content for this post: ";
  echo "<select id='CHTML' name='CHTML'>";
  echo "<option value='-1'>Select a PHP File</option>";  
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

function CHTML_save() {	
	global $post_ID;

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
	if (!current_user_can( 'edit_post', $post_id ) ) return $post_id;

	$id = $_POST['post_ID'];
	$html_file = $_POST['CHTML'];
	
	// no need to keep extra info in db for posts/pages without an extra stylesheet.
	if ($html_file != '-1') {
 	update_post_meta($id, 'html_file', $html_file);
 }
 else {
  delete_post_meta($id, 'html_file');
 }
}

function CHTML_include() {
 global $wp_query;
 global $custom_content;
 $id = $wp_query->post->ID;
 $custom_file  = get_post_meta($id, 'html_file','true');
 // $custom_file = str_replace('.html', '', $custom_file);
 // $the_path   = get_stylesheet_directory() . '/custom_html' . CHTML_PATH;
 // $the_output = $the_path . CHTML_PATH . $custom_file;
 
 if ($custom_file) $custom_content = str_replace('.php', '', $custom_file);

}

// oi! wait! where are you going? are you sure? 100%? a second thought? come on let's talk about it. oh well.
function CHTML_uninstall() {
			global $wpdb;	
			$wpdb->query($wpdb->prepare("DELETE FROM $wpdb->postmeta WHERE meta_key = 'html_file'"));
}

add_action('admin_menu', 'CHTML_box');
add_action('save_post', 'CHTML_save');
add_action('wp','CHTML_include');
register_uninstall_hook(__FILE__, 'CHTML_uninstall');
?>