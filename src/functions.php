<?php

function studio_elvis_register_theme_menu() {
  register_nav_menu('primary', 'Hoofdnavigatie');
}

add_action('init', 'studio_elvis_register_theme_menu');

function studio_elvis_init() {
  // located in the sidebar. Empty by default.
  // register_sidebar(array(
  //   'name' => 'Sidebar Widget Area',
  //   'id' => 'sidebar-widget-area',
  //   'description' => 'De widget area voor de sidebar',
  //   'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
  //   'after_widget' => '</div>',
  //   'before_title' => '<h2>',
  //   'after_title' => '</h2>',
  // ));

  // located in the footer. Empty by default.
  // register_sidebar(array(
  //   'name' => 'Footer Widget Area',
  //   'id' => 'footer-widget-area',
  //   'description' => 'De widget area voor de footer',
  //   'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
  //   'after_widget' => '</div>',
  //   'before_title' => '<h2>',
  //   'after_title' => '</h2>',
  // ));
}

add_action('widgets_init', 'studio_elvis_init');

function get_portfolio_item($field_name) {
  $image = get_field($field_name);

  // vars
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];

  // thumbnail
  $size = 'thumbnail';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];

  return "<div class=\"portfolio-picture-item\">"
    . "<a href=\"".$url."\">"
    . "<img src=\"".$thumb."\" alt=\"".$alt."\" width=\"".$width."\" height=\"".$height."\" />"
    . "</a></div>";
}

function show_portfolio_thumbnail($post_id) {
  $image = get_field('uitgelicht_afbeelding', $post_id);

  // vars
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];

  // thumbnail
  $size = 'thumbnail';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];

  return "<img src=\"".$thumb."\" alt=\"".$alt."\" width=\"".$width."\" height=\"".$height."\" />";
}
?>
