<?php
/**
 * This is the default template for the info window in Geo Mashup maps. 
 *
 * Don't modify this file! It will be overwritten by upgrades.
 *
 * Instead, copy this file to "geo-mashup-info-window.php" in your theme directory, 
 * or info-window.php in the Geo Mashup Custom plugin directory, if you have that 
 * installed. Those files take precedence over this one.
 *
 * For styling of the info window, see map-style-default.css.
 *
 * @package GeoMashup
 */

// A potentially heavy-handed way to remove shortcode-like content
add_filter( 'the_excerpt', array( 'GeoMashupQuery', 'strip_brackets' ) );

?>
<div class="locationinfo post-location-info">
<?php while (have_posts()) : the_post(); ?>
  <?php echo wp_get_attachment_image((simple_fields_value("thumbnail"))) ?>
  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  <p><?php echo GeoMashup::location_info(); ?></p>
  <p><?php echo simple_fields_value("website") ?></p>
  <p><?php echo simple_fields_value("email") ?></p>
<?php endwhile; ?>
</div>

