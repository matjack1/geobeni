GeoMashup.addAction('objectIcon', function( properties, object ) {
  object.icon.image = properties.template_url_path + '/assets/images/' + object.tipologia_icon;
  object.icon.iconSize = [ 25, 36 ];

  // add icon to term_properties for legend retrieval
  properties.term_properties.stato.terms[object.terms.stato].icon = object.icon
});

GeoMashup.addAction('taxonomyLegendEntry', function($key, $def, taxonomy, term_id) {
  var icon = GeoMashup.opts.term_properties.stato.terms[term_id].icon;
  jQuery('img', $key).attr('src', icon.image);
});

GeoMashup.addAction('loadedMap', function(properties, map) {
  parent.jQuery('.geopost').click(function() {
    GeoMashup.clickObjectMarker(jQuery(this).data('id'), 1);
  });
});

GeoMashup.addAction('selectedMarker', function(opts, selected_marker, map) {
  var latlon = new mxn.LatLonPoint(selected_marker.location.lat + 0.002, selected_marker.location.lon);
  map.setCenterAndZoom(latlon, 16);
  jQuery.colorbox.close();
});

GeoMashup.addAction('markerInfoWindowLoad', function(marker, filter) {
  var $content = jQuery(filter.content);
  $marker_title = $content.find('h2 a');
  $marker_title.attr('onclick',
                     "jQuery.colorbox( \
                       { \
                         href: '"+ $marker_title.attr('href') +"', \
                         iframe: true, \
                         width: '60%', \
                         height: '80%' \
                       } \
                     ); \
                     return false;");
  filter.content = $content.get(0).outerHTML;
});

