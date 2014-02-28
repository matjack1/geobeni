<?php

// This function include screen.css in wp_head() function

function enqueue_stylesheets() {
  wp_register_style("screen", stylesheet_url("screen"), false, false);
  wp_enqueue_style("screen");
  wp_register_style("fancybox", stylesheet_url("jquery.fancybox"), false, false);
  wp_enqueue_style("fancybox");
}

add_action('wp_enqueue_scripts', 'enqueue_stylesheets');

// This function include jquery and application.js in wp_footer() function

function enqueue_javascripts() {
  wp_register_script("jquery", '//code.jquery.com/jquery-1.10.2.min.js', '', false, true);
  wp_enqueue_script("jquery");
  wp_register_script("fancybox", javascript_url("jquery.fancybox"), '', false, true);
  wp_enqueue_script("fancybox");
  wp_register_script("application", javascript_url("application"), '', false, true);
  wp_enqueue_script("application");
}

add_action('wp_enqueue_scripts', 'enqueue_javascripts');

