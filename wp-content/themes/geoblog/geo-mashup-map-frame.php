<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lte IE 6]>
<html xmlns:v="urn:schemas-microsoft-com:vml">
<![endif]-->

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Geo Mashup Map</title>
		<?php GeoMashupRenderMap::head(); ?>
    <?php echo javascript_include_tag('jquery.colorbox') ?>

    <?php echo stylesheet_link_tag('colorbox') ?>
		<style type="text/css">
			v\:* { behavior:url(#default#VML); }
			#geo-mashup {
				width:<?php echo GeoMashupRenderMap::map_property( 'width' ); ?>;
				height:<?php echo GeoMashupRenderMap::map_property( 'height' ); ?>;
				<?php if ( GeoMashupRenderMap::map_property( 'background_color' ) ) : ?>
				background-color: <?php echo GeoMashupRenderMap::map_property( 'background_color' ); ?>;
				<?php endif; ?>
			}
		</style>
	</head>
	<body>
	<div id="geo-mashup">
		<noscript>
			<p><?php _e( 'This map requires JavaScript. You may have to enable it in your browser\'s settings.', 'GeoMashup' ); ?></p>
		</noscript>
	</div>
	<?php echo GeoMashupRenderMap::map_script( 'geo-mashup' ); ?>
	</body>
</html>

