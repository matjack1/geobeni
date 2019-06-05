<?php
require_once '/nfs/c08/h01/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php while ( have_posts() ) { ?>

  <?php the_post(); ?>
<h1>
  <?php echo the_title(); ?>

</h1>  <?php echo the_content(); ?>

<?php } ?>
