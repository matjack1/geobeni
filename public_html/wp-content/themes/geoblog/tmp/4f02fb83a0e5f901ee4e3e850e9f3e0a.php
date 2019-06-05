<?php
require_once '/nfs/c08/h06/mnt/122087/domains/geobeni.liberapiemonte.it/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?>  <?php global $post; ?>
  <?php $video = simple_fields_get_post_group_values($post->ID, 'Bene Confiscato - Video', $use_name = true, $return_format  = 1); ?>
  <?php if(!isset($video['Video Embed'])) { ?>

  <?php $video['Video Embed'] = array(); ?>
<?php } ?>
  <?php foreach($video['Video Embed'] as $video) { ?>

  <?php echo $video; ?>

<?php } ?>
