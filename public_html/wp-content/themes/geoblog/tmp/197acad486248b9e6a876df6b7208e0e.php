<?php
require_once '/nfs/c08/h06/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php global $post; ?>
<div class="info">
<div class="titolo_post">
<h2>
  <?php echo the_title(); ?>

</h2></div></div>  <?php $tab = isset($_GET['tab']) ? $_GET['tab'] : 'history'; ?>
<div class="tabs">
<div class="tab tab_storia">
  <?php echo link_to('Storia', get_permalink().'?tab=history', selected_tab('history', $tab)); ?>

</div><div class="tab tab_oggi">
  <?php echo link_to('Oggi', get_permalink().'?tab=today', selected_tab('today', $tab)); ?>

</div><div class="tab tab_foto">
  <?php echo link_to('Foto', get_permalink().'?tab=photo', selected_tab('photo', $tab)); ?>

</div><div class="tab tab_video">
  <?php echo link_to('Video', get_permalink().'?tab=video', selected_tab('video', $tab)); ?>

</div></div><div class="content">
  <?php echo render_partial('geopost/'.$tab); ?>

</div>