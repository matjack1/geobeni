<?php
require_once '/nfs/c08/h02/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!DOCTYPE html>
<html>
<head>
  <?php echo render_partial("layouts/head"); ?>

</head><body class="<?php echo body_classes(); ?>">
<div class="page-wrapper">
<section class="site-content">
  <?php echo wl_yield(); ?>

</section></div>  <?php wp_footer(); ?>
</body></html>