<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

function xb_menu_tree__primary(array &$variables) {
    return '<ul class="nav-menu sf-js-enabled sf-arrows">' . $variables['tree'] . '</ul>';
}



function xb_preprocess_page(&$var)
{

    $var['theme_path'] = drupal_get_path('theme', 'xb');
    $var['theme_url'] = file_create_url(drupal_get_path('theme', 'xb'));

}



function xb_preprocess_html(&$var)
{
    //drupal_add_css('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700');
}