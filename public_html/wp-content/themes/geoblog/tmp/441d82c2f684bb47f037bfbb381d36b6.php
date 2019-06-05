<?php
require_once '/nfs/c08/h02/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!DOCTYPE html>
<html>
<head>
  <?php echo render_partial("layouts/head"); ?>

<link href="\favicon.ico" rel="icon" /><title>
  Geoblog
</title></head><body class="<?php echo body_classes(); ?> no-overflow">
<div class="page-wrapper">
  <?php echo render_partial("layouts/header"); ?>

<section class="site-content">
  <?php echo wl_yield(); ?>

</section><footer class="site-footer">
  <?php echo render_partial("layouts/footer"); ?>

</footer></div>  <?php wp_footer(); ?>
</body></html>