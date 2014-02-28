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
  $(".post-location-info h2 a").fancybox({
    maxWidth: 800,
    maxHeight: 600,
    fitToView: false,
    width: "70%",
    height: "70%",
    autoSize: false,
    closeClick: false,
    openEffect: "none",
    closeEffect: "none"
  });

});

