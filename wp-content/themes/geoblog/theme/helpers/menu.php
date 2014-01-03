<?php
function province_with_geoposts($province, $typology) {
  $typology_relation = array('taxonomy' => 'tipologia', 'terms' => $typology->slug, 'field' => 'slug');
  $city_relation = array('taxonomy' => 'citta', 'terms' => $province->slug, 'field' => 'slug', 'include_children' => true);
  $tax_query = array($typology_relation, $city_relation);
  $args = array('post_type' => 'bene_confiscato', 'tax_query' => $tax_query);
  $geoposts = new WP_Query($args);
  return $geoposts->post_count > 0;
}

function city_geoposts($city, $typology) {
  $typology_relation = array('taxonomy' => 'tipologia', 'terms' => $typology->slug, 'field' => 'slug');
  $city_relation = array('taxonomy' => 'citta', 'terms' => $city->slug, 'field' => 'slug', 'include_children' => false);
  $tax_query = array($typology_relation, $city_relation);
  $args = array('post_type' => 'bene_confiscato', 'tax_query' => $tax_query);
  return new WP_Query($args);
}

