<?php
require_once '/home/matteo/dev/geoblog.local/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!--Charset  --><meta content="text/html;charset=UTF-8" http-equiv="Content-type" /><!--Title  --><title>
  <?php echo wp_title(); ?>

</title><!--Stylesheets  --><!--screen.css is loaded by default with wp_head() function. See config/initializers/default_hooks.php for details  --><!--HTML5 Shiv  -->

<!--[if lt IE 9]>
  <?php echo javascript_include_tag("http://html5shiv.googlecode.com/svn/trunk/html5.js"); ?>


<![endif]-->
  <?php wp_head(); ?>
