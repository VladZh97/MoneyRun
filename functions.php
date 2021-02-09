<?php

// Theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( "menus" ); // Add menu to theme
define('DISALLOW_FILE_EDIT', true); // Disable theme editor

// Google insights fix
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// // Remove comments
// function my_remove_admin_menus() {
//   remove_menu_page( 'edit-comments.php' );
// }
// add_action( 'admin_menu', 'my_remove_admin_menus' );
// function remove_comment_support() {
//   remove_post_type_support( 'post', 'comments' );
//   remove_post_type_support( 'page', 'comments' );
// }
// add_action('init', 'remove_comment_support', 100);



// Load assets
function add_theme_assets() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', false, 1, 'all');
  //script
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery351.js', array(), null, true);
  wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.js', array(), null, true);
  // wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), null, true);
  wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '1.0.0', true);
  wp_enqueue_script('matchHeight', get_stylesheet_directory_uri() . '/assets/js/jquery.matchHeight.js', array(), '1.0.0', true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_assets');



// // Menu register
function register_menus() {
  register_nav_menus( array(
    'main' => esc_html__( 'Primary' )
  ) );
}
add_action( 'init', 'register_menus' );

// // function custom_menu_nav_class( $classes, $item, $args, $depth ) {
// //   $_classes = [ 'menu__item' ];
// //   $theme_location = $args->theme_location ? $args->theme_location : 'default';
// //   $_classes[] = 'menu__item--' . $theme_location;
// //   // Add BEM version of wp class \/
// //   if ( in_array( 'current-menu-item', $classes ) ) {
// //     $_classes[] = 'menu__item--active';
// //   }
// //   if ( in_array( 'current-menu-item', $classes ) ) {
// //     $_classes[] = 'menu__item--active';
// //   }
// //   return $_classes;
// // }
// // add_filter( 'nav_menu_css_class', 'custom_menu_nav_class', 10, 4 );

// // function custom_menu_link_class( $atts, $item, $args, $depth ) {
// //   $atts['class'] = 'menu__anchor';
// //   if ( in_array( 'button', $item->classes, true ) ) {
// //     $atts['class'] .= ' menu__anchor--button';
// //   }
// //   if ( in_array( 'current-menu-item', $item->classes, true ) ) {
// //     $atts['class'] .= ' menu__anchor--active';
// //   }
// //   return $atts;
// // }
// // add_filter( 'nav_menu_link_attributes', 'custom_menu_link_class', 10, 4 );



// Custom pages support
add_action('admin_init', 'edit_page_supports');
function edit_page_supports()
{
  $post_ids = [9];
  // $post_templates = [
  //   'page-contact.php',
  //   'page-aboutus.php',
  //   'page-offer.php',
  //   'page-clients.php',
  //   'page-caseStudy.php',
  //   'page-raports.php',
  //   'page-blog.php',
  //   'page-carrer.php',
  //   'page-offer-single.php'
  // ];
  // $post_types = [
  //   'oferty_pracy',
  //   'case_study',
  //   'raports',
  // ];

  if (isset($_GET['post']) && in_array($_GET['post'], $post_ids)) {
    remove_post_type_support(get_post_type($_GET['post']), 'editor');
  }

  // if (isset($_GET['post']) && in_array(get_page_template_slug($_GET['post']), $post_templates)) {
  //   remove_post_type_support(get_post_type($_GET['post']), 'editor');
  // }

  // if ((isset($_GET['post']) && in_array(get_post_type($_GET['post']), $post_types)) || (isset($_GET['post_type']) && in_array($_GET['post_type'], $post_types))) {
  //   if (isset($_GET['post'])) remove_post_type_support(get_post_type($_GET['post']), 'editor');
  //   if (isset($_GET['post_type'])) remove_post_type_support($_GET['post_type'], 'editor');
  // }

  // remove_post_type_support('page', 'thumbnail');
  // remove_post_type_support('page', 'comments');
  // remove_post_type_support('page', 'author');
  // remove_post_type_support('page', 'excerpt');
}


// ACF Theme setting page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Register options page.
    $option_page = acf_add_options_page(array(
        'menu_title'    => __('Stopka'),

    ));
    
}


function filter_plugin_updates( $value ) {
  unset( $value->response['advanced-custom-fields-pro/acf.php'] );
  return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

function wpbeginner_comment_text_before($arg) {
  $arg['comment_notes_before'] = "<p class='comment-policy'>We are glad you have chosen to leave a comment. Please keep in mind that comments are moderated according to our <a href='http://www.example.com/comment-policy-page/'>comment policy</a>.</p>";
  return $arg;
}

add_filter('comment_form_defaults', 'wpbeginner_comment_text_before');

function wpb_move_comment_field_to_bottom( $fields ) {
  $comment_field = $fields['comment'];
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  return $fields;
  }
    
  add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom'); 

  
  add_filter( 'wp_list_categories', 'replace_current_cat_css_class' );

  function replace_current_cat_css_class( $html ) {
      return str_replace( ' current-cat', ' active', $html );
  }

  add_filter('comment_form_default_fields', 'url_filtered');
  function url_filtered($fields)
  {
    if(isset($fields['url']))
     unset($fields['url']);
    return $fields;
  }

  
add_filter( 'comment_form_default_fields', 'wc_comment_form_hide_cookies' );
function wc_comment_form_hide_cookies( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}

function wcs_change_submit_button_text( $defaults ) {
  $defaults['label_submit'] = 'Dodaj';
  return $defaults;
}
add_filter( 'comment_form_defaults', 'wcs_change_submit_button_text' );

?>