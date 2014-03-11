$ = jQuery

typology_switcher = ->
  $('.typology').each ->
    $(this).click ->
      $('.provinces').hide()
      $(this).next('.provinces').show()

provinces_toggler = ->
  $('h4.province').click ->
    $(@).next('.cities').toggle()

geopost_photo_lightbox = ->
  $('.gallery a').colorbox()

$(document).ready ->
  typology_switcher()
  provinces_toggler()
  geopost_photo_lightbox()

