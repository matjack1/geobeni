$ = jQuery

typology_switcher = ->
  $('.typology').each ->
    $(this).click ->
      $('.provinces').hide()
      $(this).next().show()

$(document).ready ->
  typology_switcher()

