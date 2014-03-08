$ = jQuery

typology_switcher = ->
  $('.typology').each ->
    $(this).click ->
      $('.provinces').hide()
      $(this).next().show()

provinces_toggler = ->
  $('h4.province').click ->
    $(@).next().toggle()

$(document).ready ->
  typology_switcher()
  provinces_toggler()

