<?php
require_once '/nfs/c08/h02/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php global $post; ?>
  <?php $geopost_data = simple_fields_get_post_group_values($post->ID, 'Bene Confiscato', $use_name = true, $return_format  = 2); ?>
  <?php echo $geopost_data[0]['Storia']; ?>

  <?php $history_fields = simple_fields_get_post_group_values($post->ID, 'Bene Confiscato - Storia', $use_name = true, $return_format  = 2); ?>
<ul>
  <?php foreach($history_fields as $field) { ?>

<li>
<div class="titolo_storia">
  <?php echo $field['Titolo']; ?>

</div><div class="descrizione">
<p>
  <?php echo $field['Descrizione']; ?>

</p></div></li><?php } ?>
</ul>