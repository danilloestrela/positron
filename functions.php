<?php

// Script declaration and enqueue
function scripts()
{

  wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('style');

  wp_enqueue_script('jquery');

  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
  wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'scripts');

// nav for wordpress

register_nav_menu('top_menu', __('Top Menu', 'positron'));
register_nav_menu('footer_menu', __('Footer Menu', 'positron'));
register_nav_menu('sitemap_menu', __('SiteMap Menu', 'positron'));


function pstInclude($name)
{
  return include get_template_directory() . "/includes/{$name}.php";
}

function pstImage($imgName)
{
  return get_template_directory_uri() . "/dist/images/{$imgName}";
}
