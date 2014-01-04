<?php

/*
 * Making sure Wordless plugin is enabled
 */

if (!class_exists("Wordless")) {
  echo "This theme requires the <a href='https://github.com/welaika/wordless'>Wordless plugin</a> in order to work. Please, install it now!";
  die();
}

if(is_home()) {
  render_view("home");
} elseif(is_page()) {
  render_view("page");
} elseif(is_single()) {
  render_view("post");
} else {
  render_view("404");
}

