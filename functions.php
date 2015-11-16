<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array( 'unite-bootstrap' ) );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/main.css', array( 'parent-style' ) );
}

function unite_child_social(){
  $output = '<div id="social" class="social">';
  $output .= unite_social_item(of_get_option('social_facebook'), 'Facebook', 'facebook');
  $output .= unite_social_item(of_get_option('social_twitter'), 'Twitter', 'twitter');
  $output .= unite_social_item(of_get_option('social_google'), 'Google Plus', 'google-plus');
  $output .= unite_social_item(of_get_option('social_youtube'), 'YouTube', 'youtube');
  $output .= unite_social_item(of_get_option('social_linkedin'), 'LinkedIn', 'linkedin');
  $output .= unite_social_item(of_get_option('social_pinterest'), 'Pinterest', 'pinterest');
  $output .= unite_social_item(of_get_option('social_feed'), 'Feed', 'rss');
  $output .= unite_social_item(of_get_option('social_tumblr'), 'Tumblr', 'tumblr');
  $output .= unite_social_item(of_get_option('social_flickr'), 'Flickr', 'flickr');
  $output .= unite_social_item(of_get_option('social_instagram'), 'Instagram', 'instagram');
  $output .= unite_social_item(of_get_option('social_dribbble'), 'Dribbble', 'dribbble');
  $output .= unite_social_item(of_get_option('social_skype'), 'Skype', 'skype');
  $output .= unite_social_item(of_get_option('social_vimeo'), 'Vimeo', 'vimeo-square');
  $output .= unite_social_item(of_get_option('social_email'), 'Email', 'envelope');
  $output .= '</div>';
  echo $output;
}

 ?>