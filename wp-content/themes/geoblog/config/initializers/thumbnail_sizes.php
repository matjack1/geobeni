<?php

function add_thumbnails_support() {
  /*
   * Enable WordPress post thumbnail uncommenting the line below and specifing the post types
   */

  // add_theme_support('post-thumbnails', array('page', 'post'));
}

function setup_thumbnail_sizes() {
  /*
   * Add additional thumbnail sizes here
   */

  add_image_size("infowindow", 100, 300, true);
}

add_action('after_setup_theme', 'add_thumbnails_support');
add_action('after_setup_theme', 'setup_thumbnail_sizes');

