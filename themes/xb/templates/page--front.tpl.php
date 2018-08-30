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
header("not found", true, 404);

?>

<!--==========================
    Top Bar
  ============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:no_ended@qq.com">no_ended@qq.com</a>
            <i class="fa fa-phone"></i> <a href="tel:17763181919">177-631-81919【微信同号】</a>
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
            </nav><!-- #nav-menu-container -->
        </div>
    </header></div>



<section id="intro">

    <div class="intro-content">
        <h2>您提供<span>想法</span><br>剩下的交给我们!</h2>
        <p>潍坊小奔科技-<strong>潍坊专业的软件开发公司</strong>，承接网站建设、微信开发、APP开发等，按时交付，价格合理！</p>
        <div>
            <a href="/contact" class="btn-get-started scrollto">马上咨询</a>
            <a href="/services" class="btn-projects scrollto">解决方案</a>
        </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
        <div class="item" style="background-image: url('<?=$theme_path;?>/img/intro-carousel/1.jpg');"></div>
        <div class="item" style="background-image: url('<?=$theme_path;?>/img/intro-carousel/2.jpg');"></div>
        <div class="item" style="background-image: url('<?=$theme_path;?>/img/intro-carousel/3.jpg');"></div>
        <div class="item" style="background-image: url('<?=$theme_path;?>/img/intro-carousel/4.jpg');"></div>
    </div>

</section><!-- #intro -->


<main id="main">
<!--==========================
      About Section
    ============================-->
<section id="about" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="<?=$theme_path?>/img/about-img.jpg" alt="关于潍坊小奔信息科技">
            </div>

            <div class="col-lg-6 content">
                <h2>潍坊小奔科技是潍坊专业软件设计公司，开发APP、微信、网站和各种系统</h2>
                <h3>强大的技术支撑，优秀的管理和服务，为您的事业保驾护航</h3>

                <ul>
                    <li><i class="ion-android-checkmark-circle"></i>跨境电商从零到几千万销售，从Google到亚马逊，完整的开发和运营流程让您的产品远销无障碍。</li>
                    <li><i class="ion-android-checkmark-circle"></i>开发企业内部的管理软件，从生产、代理、销售，甚至是员工的日常管理，成倍的减少人员成本。</li>
                    <li><i class="ion-android-checkmark-circle"></i>微信公众号及小程序的创意开发，让您粉丝暴增，快速盈利。</li>
                    <li><i class="ion-android-checkmark-circle"></i>低成本的创业APP，快速测试市场并提供融资样板。</li>
                </ul>

            </div>
        </div>

    </div>
</section><!-- #about -->


<!--==========================
      Services Section
    ============================-->
<section id="services">
    <div class="container">
        <div class="section-header">
            <h2>服务</h2>
            <p>优秀的技术和实事求是的态度，让您的每一分钱花到位。绝不虚报坑人，引诱式消费。</p>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">免费咨询</a></h4>
                    <p class="description">中肯的建议是无价的<br/>信任是合作的基础</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                    <div class="icon"><i class="fa fa-picture-o"></i></div>
                    <h4 class="title"><a href="">系统搭建</a></h4>
                    <p class="description">作为潍坊专业的技术公司，不管是微信还是APP或者网站，从域名、程序开发到服务器采购、布署，只要是您需要的，我们都会做好</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">培训</a></h4>
                    <p class="description">针对您公司的现状，在我们熟悉的业务和能力范围内，提供从技术到运营整套方案，并帮助实施</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-map"></i></div>
                    <h4 class="title"><a href="">维护</a></h4>
                    <p class="description">您的产品需要维护或改版，请联系我们</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- #services -->


<!--==========================
      Clients Section
    ============================-->
<section id="clients" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>典型客户</h2>
            <p>感谢信任，合作愉快</p>
        </div>

        <div class="owl-carousel clients-carousel">
            <?php foreach (range(1,3) as $i):?>
            <img src="<?=$theme_path?>/img/clients/<?=$i?>.jpg" alt="典型客户">
            <?php endforeach;?>

            <?php foreach (range(4,6) as $i):?>
                <img src="<?=$theme_path?>/img/clients/<?=$i?>.png" alt="典型客户">
            <?php endforeach;?>

        </div>

    </div>
</section><!-- #clients -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>联系</h2>
                <p>免费咨询，欢迎洽谈合作
                </p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>地址</h3>
                        <address>潍坊市东风街潍州路东北角西部证券四楼</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>电话</h3>
                        <p><a href="tel:17763181919">177-631-81919</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>邮箱</h3>
                        <p><a href="mailto:no_ended@qq.com">no_ended@qq.com</a></p>
                    </div>
                </div>

            </div>
        </div>



    </section><!-- #contact -->

</main>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>潍坊小奔信息科技有限公司</strong> All Rights Reserved
            <br/>
            本网站加速服务由<a href="https://www.upyun.com/"><img   width="30px" heigth="30px" src="<?=$theme_path;?>/img/logo1.png"/></a>提供
        </div>

    </div>
</footer><!-- #footer -->
<?php render($page['content']['metatags']); ?>
