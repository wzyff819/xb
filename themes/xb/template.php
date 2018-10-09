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

function xb_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';

    $options = !empty($element['#localized_options']) ? $element['#localized_options'] : array();

    // Check plain title if "html" is not set, otherwise, filter for XSS attacks.
    $title = empty($options['html']) ? check_plain($element['#title']) : filter_xss_admin($element['#title']);

    // Ensure "html" is now enabled so l() doesn't double encode. This is now
    // safe to do since both check_plain() and filter_xss_admin() encode HTML
    // entities. See: https://www.drupal.org/node/2854978
    $options['html'] = TRUE;

    $href = $element['#href'];
    $attributes = !empty($element['#attributes']) ? $element['#attributes'] : array();

    if ($element['#below']) {
        // Prevent dropdown functions from being added to management menu so it
        // does not affect the navbar module.
        if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
            $sub_menu = drupal_render($element['#below']);
        }
        elseif ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] == 1)) {
            // Add our own wrapper.
            unset($element['#below']['#theme_wrappers']);
            $sub_menu = '<ul>' . drupal_render($element['#below']) . '</ul>';

            // Generate as standard dropdown.
            $attributes['class'][] = 'menu-has-children';

            // Set dropdown trigger element to # to prevent inadvertant page loading
            // when a submenu link is clicked.
            $options['attributes']['data-target'] = '#';
        }
    }

    return '<li' . drupal_attributes($attributes) . '>' . l($title, $href, $options) . $sub_menu . "</li>\n";
}
function xb_preprocess_html(&$var)
{
    //drupal_add_css('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700');
}