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

progetti_toggler = ->
  $('.titolo_progetto, .titolo_storia').click ->
     $(@).next('.descrizione').toggle()

progetti_open_first_two = ->
  if $('.titolo_progetto, .titolo_storia').length < 3
    $('.titolo_progetto, .titolo_storia').click()

$(document).ready ->
  typology_switcher()
  provinces_toggler()
  progetti_toggler()
  progetti_open_first_two()
  geopost_photo_lightbox()

