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
 * @ingroup themeable
 */
?>
<div id="slide-desktop">

<div id="wrapper-slides">
  <div id="slides">
    <div class="slides-container">
          
         <div class="slide slide-1">
            <div class="link-slide-1 link-slide"><div class="link"><a href="node/30">לטעימה מהתפריט</a></div></div>
            <iframe id="popup-youtube-player" width="100%" height="100%" src="//www.youtube.com/embed/4YkVPX5kKoQ?enablejsapi=1&wmode=transparent&rel=0&controls=0&iv_load_policy=3&autoplay=1&modestbranding=0&showinfo=0&showsearch=1" frameborder="0" allowfullscreen></iframe> 
          </div> 
           <div class="slide slide-1 video">
            <div class="link-slide-1 link-slide"><div class="link"><a href="node/30">לטעימה מהתפריט</a></div></div>
            <img src="sites/all/themes/menta/superslides/images/summer1.jpg" width="1400" height:"680" >
          </div>
          <!-- <div class="slide slide-1">
            <div class="link-slide-1 link-slide"><div class="link"><a href="node/30">לטעימה מהתפריט</a></div></div>
            <img src="sites/all/themes/menta/superslides/images/summer2.jpg" width="1400" height:"680" >
          </div> -->
          <div class="slide slide-2">
            <div class="link-slide-2 link-slide"><div class="link"><a href="node/324">לבחירת קפסולות</a></div></div>
            <img src="sites/all/themes/menta/superslides/images/joe-capsule.jpg" width="1400" height:"680" >
          </div> 
          <div class="slide slide-3">
            <div class="link-slide-3 link-slide"><div class="link"><a href="node/5">לתשלום חשבונות</a></div></div>
            <img src="sites/all/themes/menta/superslides/images/payment.jpg" width="1400" height:"680" >
          </div>
         <div class="slide slide-4">
            <div class="link-slide-4 link-slide"><div class="link"><a href="node/324">לבחירת קפסולות</a></div></div>
            <img src="sites/all/themes/menta/superslides/images/extra_strong.jpg" width="1400" height:"680" >
          </div>
          <div class="slide slide-1">
            <div class="link-slide-1 link-slide"><div class="link"><a href="node/30">לטעימה מהתפריט</a></div></div>
            <img src="sites/all/themes/menta/superslides/images/summer3.jpg" width="1400" height:"680" >
          </div>
    </div>


    <nav class="slides-navigation">
      <div class="wrapper">
        <a href="#" class="prev"></a>
        <a href="#" class="next"></a>
      </div>
    </nav>  
  </div>
  <script src="sites/all/themes/menta/superslides/js/jquery.min.js"></script>
  <script src="sites/all/themes/menta/superslides/js/jquery.easing.1.3.js"></script>
  <script src="sites/all/themes/menta/superslides/js/jquery.animate-enhanced.min.js"></script>
  <script src="sites/all/themes/menta/superslides/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
   <script>
    $('#slides').superslides({
      animation: 'fade',
      hashchange: true,
      animation_speed: 500,
      play: 0
    });
  </script>  
   <footer class="footer">
  <div class="footer-top"></div>
  <div class="footer-content">
    <?php print render($page['footer']); ?>
  </div>
</footer>
</div> 
</div>


<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <div class="top">
            <?php print render($page['top']); ?>
        </div>
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container container">
<div id="slide-mobile">

          <div class="slide-mobile">
            <div class="video-container">
                <iframe src="//www.youtube.com/embed/4YkVPX5kKoQ?rel=0&showinfo=0&showsearch=1" frameborder="0" width="560" height="315"></iframe>
              </div>
          </div>
          <div class="slide-mobile">
            <a href="node/30">
            <img src="sites/all/themes/menta/superslides/images/summer1.jpg" width="1400" height:"680" >
            </a>
          </div>  
           <div class="slide-mobile">
            <a href="node/30">
            <img src="sites/all/themes/menta/superslides/images/summer3.jpg" width="1400" height:"680" >
            </a>
          </div>  
          <div class="slide-mobile">
            <a href="node/324">
            <img src="sites/all/themes/menta/superslides/images/joe-capsule.jpg" width="1400" height:"680" >
            </a>
          </div>  
          <div class="slide-mobile">
            <a href="node/2">
            <img src="sites/all/themes/menta/superslides/images/post-front.png" width="1400" height:"680" >
            </a>
          </div>
          <div class="slide-mobile">
            <a href="node/5">
            <img src="sites/all/themes/menta/superslides/images/payment.jpg" width="1400" height:"680" >
            </a>
          </div>
</div>
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->



