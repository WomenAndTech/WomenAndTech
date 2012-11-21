<?php
/*
Plugin Name: Custom Javascript for Posts and Pages
Plugin URI: http://brttb.com
Description: An easy way to include custom Javascript per post/page
Version: 1.0
Author: Brett Bergmann
Author URI: http://brttb.com/

Uses Code From:

Custom js for Posts and Pages (Cjs)
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

/* CHANGE THE FOLLOWING IF YOU NEED A DIFFERENT PATH IT MUST BE A SUBDIR IN YOUR THEME'S FOLDER */
define('CJS_PATH','/custom-js/');
/* AND THAT'S ABOUT IT */

define('Cjs_VERSION','1.0');

function cjs_box() {
 add_meta_box( 'custom-js', 'Add a javascript file to this post?', 'cjs_add_box', 'post', 'normal','high' );
 add_meta_box( 'custom-js', 'Add a javascript fil to this page?', 'cjs_add_box', 'page', 'normal','high' );
  add_meta_box( 'custom-js', 'Add a javascript file to this interview?', 'cjs_add_box', 'interview', 'normal','high' );
}

function cjs_add_box() {
  global $post_ID;
  $current = get_post_meta($post_ID, 'custom_js', 'true'); 
  $dir_url = get_stylesheet_directory()	. CJS_PATH;
  echo "Additional javascript file: ";
  echo "<select id='cjs' name='cjs'>";
  echo "<option value='-1'>Select a file</option>";  
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

function cjs_save() {	
	global $post_ID;

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
	if (!current_user_can( 'edit_post', $post_id ) ) return $post_id;

	$id = $_POST['post_ID'];
	$custom_js = $_POST['cjs'];
	
	// no need to keep extra info in db for posts/pages without an extra stylesheet.
	if ($custom_js != '-1') {
 	update_post_meta($id, 'custom_js', $custom_js);
 }
 else {
  delete_post_meta($id, 'custom_js');
 }
}

function cjs_include() {
 global $wp_query;
 $id = $wp_query->post->ID;
 $the_js  = get_post_meta($id, 'custom_js','true'); 
 $the_path   = '/assets';
 $the_output = $the_path . CJS_PATH . $the_js;
 if ($the_js) {
  wp_register_script('custom_js', $the_output, array('jquery'), null, true);
  wp_enqueue_script('custom_js');
 }
}

// oi! wait! where are you going? are you sure? 100%? a second thought? come on let's talk about it. oh well.
function cjs_uninstall() {
			global $wpdb;	
			$wpdb->query($wpdb->prepare("DELETE FROM $wpdb->postmeta WHERE meta_key = 'custom_js'"));
}

add_action('admin_menu', 'cjs_box');
add_action('save_post', 'cjs_save');
//set priority low so the enqueu scripts in script.php has a chance to run first
add_action('wp_enqueue_scripts','cjs_include', 1000);
register_uninstall_hook(__FILE__, 'cjs_uninstall');
?>