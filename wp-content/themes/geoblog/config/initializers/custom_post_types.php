<?php

function add_custom_post_types() {
  /*
   * Create here your custom post types. You can both use the WordPress register_post_type()
   * function, or the Wordless new_post_type() helper.
   */

  new_post_type(array(
      "singular" => 'bene_confiscato',
      "plural" => 'beni_confiscati'
    ));
  // new_post_type("portfolio_work", array('title', 'editor'));
}

function add_custom_taxonomies() {
  /*
   * Create here your custom post types. You can both use the WordPress register_taxonomy()
   * function, or the Wordless new_taxonomy() helper.
   */

  // new_taxonomy("work_type", array('portfolio_work'));
  new_taxonomy(array(
      "singular" => 'tipologia',
      "plural" => 'tipologie'
    ), 'bene_confiscato');

  register_taxonomy(
    'citta', 
    'bene_confiscato', 
    array(
      'hierarchical' => true,
      'labels' => array(
        'name' => 'Città',
        'singular_name' => 'Città'
      )
    )
  );

  new_taxonomy(array(
    "singular" => 'stato',
    "plural" => 'stato'
  ), 'bene_confiscato');
}

add_action('init', 'add_custom_post_types');
add_action('init', 'add_custom_taxonomies');

