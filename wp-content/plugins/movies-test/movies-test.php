<?php
/*
Plugin Name: Movies plugin
Description: Adds movies post type
*/
/* code */


define('MOVIE_SUBTITLE', 'subtitle');
define('MOVIE_TYPE', 'movies');
//define('MOVIE_NONCE', 'movies_nonce');

add_action('init', 'create_movie_type');
add_action('admin_menu', 'movies_meta');
add_action('save_post', 'movies_meta_save');

function create_movie_type() {
	register_post_type( MOVIE_TYPE ,
		array(
			'labels' => array(
				'name' => __( 'Movies' ),
				'singular_name' => __( 'Movie' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail'),
			'taxonomies' => array( 'category' )
		)
	);
}


function movies_meta() {
	add_meta_box('movie_subtitle', __( 'Subtitle' ), 'movies_meta_html', MOVIE_TYPE, 'normal', 'high');
}

function movies_meta_html($post) {
	//wp_nonce_field(basename( __FILE__ ), MOVIE_NONCE);
	echo '<input type="text" name="'. MOVIE_SUBTITLE . '" value="' . get_post_meta($post->ID, MOVIE_SUBTITLE, true) . '" />';
}

function movies_meta_save ($post_id) {
	$post = get_post($post_id);

	//verify everything
	if (
		//(!isset($_POST[MOVIE_NONCE]) ||	!wp_verify_nonce( $_POST[MOVIE_NONCE], basename(__FILE__))) ||
		($post->post_type != MOVIE_TYPE) ||
		(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
		(!current_user_can('edit_post', $post_id)) 
	) {
		return  $post_id;
	}
	
	//save
	update_post_meta($post_id, MOVIE_SUBTITLE, esc_attr($_POST[MOVIE_SUBTITLE]));

	return $post_id;
}

/* end code */
?>
