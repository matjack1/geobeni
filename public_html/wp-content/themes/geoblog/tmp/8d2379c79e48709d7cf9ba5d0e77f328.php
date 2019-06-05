<?php
require_once '/nfs/c08/h01/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php global $post; ?>
  <?php $projects = simple_fields_get_post_group_values($post->ID, 'Bene Confiscato - Progetti', $use_name = true, $return_format  = 2); ?>
<ul>
  <?php foreach($projects as $project) { ?>

<li>
<div class="titolo_progetto">
  <?php echo $project['Titolo Progetto']; ?>

</div><div class="descrizione">
<p>
  <?php echo $project['Testo Progetto']; ?>

</p></div></li><?php } ?>
</ul>