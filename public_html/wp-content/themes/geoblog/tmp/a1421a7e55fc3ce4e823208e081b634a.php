<?php
require_once '/home/matteo/src/geobeni/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php while ( have_posts() ) { ?>

  <?php the_post(); ?>
<h1>
  <?php echo the_title(); ?>

</h1>  <?php echo the_content(); ?>

<?php } ?>
