<?php

function photosnap_files() {

//Javascript
 wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), NULL, 1.0, true);

//GOOGLE FONT
  wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap');

//STYLE.CSS
  wp_enqueue_style('main_styles', get_stylesheet_uri());

//BUILD FOLDER INDEX.CSS
 wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'photosnap_files');

function theme_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_features');




function photosnap_post_types() {
  register_post_type('stories', array(
    'public' => true,
    'labels' => array(
      'name' => 'Stories'
    ),
    'menu_icon' => 'dashicons-book'
  ));
}

add_action('init', 'photosnap_post_types');




