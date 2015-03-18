<?php

/*
 * Plugin Name: Add Post Title to Insert Media Screen
 * Plugin URI: http://jasonlcrane.com
 * Description: Adds the post title to the Insert Media screen so you know what post you're editing when adding media.
 * Version: 1.0
 * Author: Jason Crane
 * Author URI: http://jasonlcrane.com
*/

add_filter('media_view_strings', 'media_view_strings');

function media_view_strings( $strings ) {
	global $post, $pagenow;
	if ($pagenow != 'upload.php') {
		if (!empty($post->post_title) || $post->post_title != '') {
			$strings['insertMediaTitle'] = __( 'Insert Media into ' . $post->post_title, 'insert_post_title' );
		}
	}
	return $strings;
}
