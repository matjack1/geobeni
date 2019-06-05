<?php
require_once '/nfs/c08/h02/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><div class="map">
  <?php $beni = latest_posts_of_type('bene_confiscato'); ?>
  <?php $open_info = isset($_GET['open_object_id']) ? true : false;; ?>
  <?php echo GeoMashup::map(array('map_content' => $beni, 'auto_info_open' => $open_info)); ?>

</div><div class="geo-menu">
  <?php echo render_partial('geo-menu'); ?>

</div><div class="geo-legend">
  <?php echo render_partial('geo-legend'); ?>

</div>