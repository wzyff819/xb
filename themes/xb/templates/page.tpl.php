<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<!--==========================
    Top Bar
  ============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            潍坊网站建设，潍坊微信开发，潍坊APP开发，潍坊软件公司<i class="fa fa-phone"></i><a href="tel:17763181919">177-631-81919</a>【微信同号】
        </div>

    </div>
</section>


<div id="header-sticky-wrapper" class="sticky-wrapper" style="height: 84px;">
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="/" class="scrollto">小奔<span>科技</span></a></h1>
                  </div>

            <nav id="nav-menu-container">
                <?php print render($primary_nav);?>
            </nav>
        </div>
    </header></div>


<main id="main">
<div class="main-container <?php print $container_class; ?>">

    <div class="row">

        <?php if (!empty($page['sidebar_first'])): ?>
            <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_first']); ?>
            </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>

        <section<?php print $content_column_class; ?>>
            <?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
                <div class="section-header"><h2><?php print $title; ?></h2></div>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
        </section>

        <?php if (!empty($page['sidebar_second'])): ?>
            <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_second']); ?>
            </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>

    </div>
</div>
</main>
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>潍坊小奔信息科技有限公司</strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- #footer -->


