<?php

function get_category_anchor($category) {
  echo build_anchor($category->name, array("href" => get_category_link( $category->term_id ), "rel" => "nofollow"));
}

function get_tag_anchor($tag) {
  echo build_anchor($tag->name, array("href" => get_tag_link( $tag->term_id ), "rel" => "nofollow"));
}

function build_anchor($content, $a) {
  $attrs = "";
  
  foreach(array_keys($a) as $key) {
    $value = $a[$key];
    $attrs .= ' ' . $key . '="' . $value . '"';
  }
  
  return '<a' . $attrs . '>' . $content . '</a>';
}

?>