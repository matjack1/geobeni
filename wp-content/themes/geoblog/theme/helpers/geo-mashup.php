<?php

function my_geo_mashup_locations_json_filter( $json_properties, $queried_object ) {
  $post_id = $queried_object->object_id;
  $meta_field = wp_get_post_terms( $post_id, 'stato', array("fields" => "slugs"));

  $tipologia = reset($meta_field);

  $icons = array(
    'aziende-in-gestione' => 'blu.png',
    'beni-destinati-consegnati' => 'verde.png',
    'beni-destinati-non-consegnati' => 'giallo.png',
    'beni-in-gestione' => 'rosso.png');

  $json_properties['tipologia_icon'] = $icons[$tipologia] or 'nero.png';

  return $json_properties;
}
add_filter( 'geo_mashup_locations_json_object', 'my_geo_mashup_locations_json_filter', 10, 2 );

?>
