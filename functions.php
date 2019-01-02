<?php
add_theme_support("menus");
register_sidebar(
  array(
    "before_widget" => "<div class='widget'>",
    "after_widget" => "</div>",
    "before_title" => "<h3>",
    "after_title" => "</h3>"
  )
);
add_theme_support("post-thumbnails");
function winexcerpt($length) {
  global $post;
  $content = mb_substr(strip_tags($post -> post_content),0,$length);
  return $content;
}