<?php
require_once '/home/matteo/src/geobeni/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><a href="http://xmedialab.acmos.net/">
<div class="xmedialab">
</div></a><div class="pagine-contenitore">
<div class="pagine geoblog">
  <?php echo link_to("Che cos'è il Geoblog?", get_permalink(get_page_by_title("Che cos'è il Geoblog?")), array('class' => 'geoblog')); ?>

</div><div class="pagine storia">
  <?php echo link_to("Storia del Geoblog", get_permalink(get_page_by_title("Storia del Geoblog")), array('class' => 'storia')); ?>

</div><div class="pagine osservatorio">
  <?php echo link_to("Osservatorio", "http://beniconfiscati.liberapiemonte.it/"); ?>

</div></div>