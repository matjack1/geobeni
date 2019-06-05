<?php
require_once '/home/matteo/src/geobeni/html/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><ul class="typologies">
  <?php $typologies = get_terms('tipologia', array('orderby'=>'name', 'order'=>'desc')); ?>
  <?php foreach($typologies as $typology) { ?>

<li class="typology typology-<?php echo $typology->slug; ?>">
<h3>
  <?php echo $typology->name; ?>

</h3></li><ul class="provinces provinces-<?php echo $typology->slug; ?>">
  <?php $provinces = get_terms('citta', array('hide_empty' => false, 'parent' => 0)); ?>
  <?php foreach($provinces as $province) { ?>

  <?php if(province_with_geoposts($province, $typology)) { ?>

<h4 class="province">
  <?php echo $province->name; ?>

</h4><div class="cities">
  <?php $cities = get_terms('citta', array('parent' => $province->term_id));; ?>
  <?php foreach($cities as $city) { ?>

  <?php $geoposts = city_geoposts($city, $typology); ?>
  <?php if($geoposts->post_count > 0) { ?>

<li>
<h5>
  <?php echo $city->name; ?>

</h5></li><ul>
  <?php while ($geoposts->have_posts()) { ?>

  <?php $geoposts->the_post(); ?>
<li>
<a class="geopost" data-id="<?php echo the_id(); ?>">
  <?php echo the_title(); ?>

</a></li><?php } ?>
</ul><?php } ?>
<?php } ?>
</div><?php } ?>
<?php } ?>
</ul><?php } ?>
</ul>