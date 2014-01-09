<?php
function body_classes() {
  return join( ' ', get_body_class());
}

function selected_tab($target, $selected) {
  if($target == $selected) {
    return array('class' => 'selected');
  }
}

