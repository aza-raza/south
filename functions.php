<?php

add_theme_support( 'post-thumbnails' );

// Register menu areas in appareance
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );


// options
if( function_exists('acf_add_options_page') ) { 
    acf_add_options_page(); 
}

//Register sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'widget',
        'id' => 'widget',
        'before_widget' => '<div class="south-catagories-card mb-70">',
        'after_widget' => '<div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));
}



//inverser champs message pour les commentaires
function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
	}
	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
// avatar pour comentaire
    add_filter( 'avatar_defaults', 'custom_avatar' );
        function custom_avatar($avatar_defaults){
        $custom_avatar = get_stylesheet_directory_uri() . '/images/custom-avatar.png';
        $avatar_defaults[$custom_avatar] = "My Default Avatar";
        return $avatar_defaults;
    }



