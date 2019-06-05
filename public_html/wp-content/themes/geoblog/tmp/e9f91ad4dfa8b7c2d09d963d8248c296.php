<?php
require_once '/nfs/c08/h02/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php global $post; ?>
  <?php $photos = simple_fields_get_post_group_values($post->ID, 'Bene Confiscato - Foto', $use_name = true, $return_format  = 1); ?>
  <?php if(!isset($photos['Foto'])) { ?>

  <?php $photos['Foto'] = array(); ?>
<?php } ?>
<div class="gallery">
  <?php foreach($photos['Foto'] as $photo) { ?>

  <?php echo wp_get_attachment_link($photo); ?>

<?php } ?>
</div>