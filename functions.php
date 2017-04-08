<?php

// This adds the feature to add featured images to the post
add_theme_support( 'post-thumbnails' );

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'primary-menu' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

# This add .active class to the current page menu
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

# Jetpack Sharing button 
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display', 19 );
    remove_filter( 'the_excerpt', 'sharing_display', 19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );

# Frontpage Sidebar Widget
function register_frontpage_sidebar() {
    $args = [
        'name'          => 'Frontpage Sidebar',
        'id'            => 'frontpage-sidebar',
        'before_widget' => '<ul class="widget-container animated fadeInRight" id="single_widget"><li class="widget">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<div class="widgettitle">',
        'after_title'   => '</div>',
        'description'   => 'This side bar is used at the frontpage of the theme',
    ];
    register_sidebar($args);
}
add_action('widgets_init', 'register_frontpage_sidebar');

# Single page Sidebar Widget
function register_singlepage_sidebar() {
    $args = [
        'name'          => 'BMA Single Page Sidebar',
        'id'            => 'singlepage-sidebar',
        'before_widget' => '<ul class="widget-container animated fadeInRight" id="single_widget"><li class="widget">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<div class="widgettitle">',
        'after_title'   => '</div>',
        'description'   => 'This side bar is used at single page of the theme',
    ];
    register_sidebar($args);
}
add_action('widgets_init', 'register_singlepage_sidebar');

# First Row on page Sidebar Widget
function register_firstrow_sidebar() {
    $args = [
        'name'          => 'BMA First Row Sidebar',
        'id'            => 'firstrow-sidebar',
        'before_widget' => '<div class="row">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widgettitle">',
        'after_title'   => '</div>',
        'description'   => 'This side bar is used as a first row in this theme',
    ];
    register_sidebar($args);
}
add_action('widgets_init', 'register_firstrow_sidebar');