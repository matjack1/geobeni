<?php
// A potentially heavy-handed way to remove shortcode-like content
add_filter( 'the_excerpt', array( 'GeoMashupQuery', 'strip_brackets' ) );
?>

<div class="locationinfo post-location-info">
  <?php while (have_posts()) : the_post(); ?>
    <?php echo wp_get_attachment_image((simple_fields_value("thumbnail")), 'infowindow') ?>
    <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo GeoMashup::location_info(); ?></p>

    <?php
    $website = simple_fields_value("website");
    $email = simple_fields_value("email");

    if (!empty($website)) { ?>
      <p><?php echo link_to('Sito Internet', $website) ?></p>
    <? }

    if (!empty($email)) { ?>
      <p><?php echo link_to('Indirizzo Email', 'mailto:'.$email) ?></p>
    <? }
  endwhile; ?>
</div>

