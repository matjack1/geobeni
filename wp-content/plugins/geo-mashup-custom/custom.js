GeoMashup.addAction( 'objectIcon', function( properties, object ) {
  object.icon.image = properties.template_url_path + '/assets/images/' + object.tipologia_icon;
  object.icon.iconSize = [ 25, 36 ];
} );

GeoMashup.addAction( 'taxonomyLegendEntry', function($key, $def, taxonomy, term_id) {
  var icons = {
    '10': 'giallo.png',
    '9': 'rosso.png',
    '8': 'verde.png',
    '7': 'blu.png'
  };

  var icon = icons[term_id];
  jQuery('img', $key).attr('src', '/wp-content/themes/geoblog/assets/images/' + icon);
} );

