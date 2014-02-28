$ = jQuery

typology_switcher = ->
  $('.typology').each ->
    $(this).click ->
      $('.provinces').hide()
      $(this).next().show()

$(document).ready ->
  typology_switcher()

  $(".post-location-info h2 a").fancybox
    maxWidth: 800
    maxHeight: 600
    fitToView: false
    width: "70%"
    height: "70%"
    autoSize: false
    closeClick: false
    openEffect: "none"
    closeEffect: "none"
