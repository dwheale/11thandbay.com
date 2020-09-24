<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wt_11bay
 */

$sunday_hours = get_field('sunday_hours');
$monday_hours = get_field('monday_hours');
$tuesday_hours = get_field('tuesday_hours');
$wednesday_hours = get_field('wednesday_hours');
$thursday_hours = get_field('thursday_hours');
$friday_hours = get_field('friday_hours');
$saturday_hours = get_field('saturday_hours');

?>
  <!doctype html>
<html <?php language_attributes();?>>

  <head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPBH8NN');</script>
<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130596620-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130596620-1');
</script>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="Whealetech, LLC">
    <link rel="icon" href="https://11thandbay.com/wp-content/themes/wt_11bay/assets/img/favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/main.css" rel="stylesheet">

    <!-- Speed Scripts -->
    <script src="<?php bloginfo('template_directory') ?>/assets/js/speed.js"></script>
	  
	  <!-- JQuery -->
	  <script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-3.4.1.js"></script>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<?php wp_head();?>

  <!-- Google recaptcha -->

	<meta name="google-site-verification" content="sXmS8KkjGdf6pUl79dnrr0rHB5rEzBKfDfkRl9-n1lg" />
  
  </head>

  <body <?php body_class();?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBH8NN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e('Skip to content', 'wt_11bay');?>
      </a>


      <header class="site-header">
        <!-- NAVIGATION ================================================================ -->
        <?php
if (is_front_page()) {
    ?>
    <section id="intro" data-type="background" data-speed="2">
    <div class="intro-nav-bar">
            <div class="intro-nav-logo">
              <img src="<?php bloginfo('template_directory')?>/assets/img/11Bay-logo-full.png" alt="11th and Bay Logo">
            </div>
            <?php
//for the fixed menu on the home page
    wp_nav_menu(array(
        'menu' => 'primary',
        'container' => 'div',
        'container_class' => '',
        'menu_class' => 'intro-nav-links',
    ));

    ?>
      <div class="intro-text">
        <a href="https://goo.gl/maps/CYqDvHBsbD42">1050 BAY AVENUE</a>  |  COLUMBUS, GA 31901  |  <a href="tel:7069400202">706.940.0202</a>
      </div><!-- /.container -->
    </div> <!-- End INTRO NAV BAR -->
  
    <div class="intro-open" id="intro-open-text">
      <a href="#" data-toggle="modal" data-target="#hours-modal">
        <span id="open" class="hidden">Come on in, we're open! </span>
        <span id="closed" class="hidden">We're closed right now. Come see us </span>
        <span id="sunday" data-day="0" class="hidden">Sunday | <?php echo $sunday_hours ?></span>
        <span id="monday" data-day="1" class="hidden">Monday | <?php echo $monday_hours ?></span>
        <span id="tuesday" data-day="2" class="hidden">Tuesday | <?php echo $tuesday_hours ?></span>
        <span id="wednesday" data-day="3" class="hidden">Wednesday | <?php echo $wednesday_hours ?></span>
        <span id="thursday" data-day="4" class="hidden">Thursday | <?php echo $thursday_hours ?></span>
        <span id="friday" data-day="5" class="hidden">Friday | <?php echo $friday_hours ?></span>
        <span id="saturday" data-day="6" class="hidden">Saturday | <?php echo $saturday_hours ?></span>
		<span id="dining-closed" data-day="7" class="hidden">Our dining room is currently closed until further notice</span>
      </a>
    </div><!-- /.intro-open -->
  </section><!-- /#intro -->
          
        <?php
} else { ?>
  <div class="wt-navbar-wrapper secondary">
      <div class="wt-nav-logo">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/11B-logo.png" alt="11th and Bay logo">
      </div>
      <!-- /.logo -->
      <?php
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_id' => 'main',
    'container' => 'div',
    'container_class' => 'secondary',
    'menu_class' => 'wt-navbar',
));
?>
    </div>
    <!-- /.navbar-wrapper -->
    <?php
}
?>

                <!-- RESPONSIVE SIDEBAR SECTION -->
                <div id="sidenav" class="wt-sidenav">
                  <a href="#" class="wt-close-sidenav" onclick="closeNav()">
                    <span>&times;</span>
                    <span class="sr-only">Close</span>
                  </a>
                  <?php
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_id' => 'sidenav',
    'container' => 'div',
    'menu_class' => 'wt-navlink',
));
?>
                  <div class="wt-sidebar-logo">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/11B-logo.png" alt="11th and Bay logo">
                  </div>

                </div>
                <!-- /#sidenav.wt-sidenav -->
                <!-- END RESPONSIVE SIDEBAR -->

                <!-- MOBILE MENU -->
                <div class="wt-mobile-menu">
                  <div class="wt-mobilelink">
                    <a href="tel:1-706-940-0202">
                      <span class="fa fa-mobile wt-nav-icon"></span>
                      <!-- /.fa fa-mobile wt-nav-icon -->
                      <span class="wt-nav-text">Call</span>
                      <!-- /.wt-nav-text -->
                    </a>
                  </div>
                  <!-- /.wt-mobilelink -->
                  <div class="wt-mobilelink">
                    <a href="https://goo.gl/maps/CYqDvHBsbD42">
                      <span class="fa fa-map-o wt-nav-icon"></span>
                      <!-- /.fa fa-location-arrow wt-nav-icon -->
                      <span class="wt-nav-text">Map</span>
                      <!-- /.wt-nav-text -->
                    </a>
                  </div>
                  <!-- /.wt-mobilelink -->
                  <div class="wt-mobilelink">
                    <a href="#" data-toggle="modal" data-target="#hours-modal">
                      <span class="fa fa-clock-o wt-nav-icon"></span>
                      <!-- /.fa fa-mobile wt-nav-icon -->
                      <span class="wt-nav-text">Hours</span>
                      <!-- /.wt-nav-text -->
                    </a>
                  </div>
                  <!-- /.wt-mobilelink -->
                  <div class="wt-mobilelink">
                    <a href="/visit">
                      <span class="fa fa-cutlery wt-nav-icon"></span>
                      <!-- /.fa fa-mobile wt-nav-icon -->
                      <span class="wt-nav-text">Reserve</span>
                      <!-- /.wt-nav-text -->
                    </a>
                  </div>
                  <!-- /.wt-mobilelink -->
                  <div class="wt-mobilelink">
                    <a href="javascript:void()" onclick="openNav()">
                      <span class="fa fa-bars wt-nav-icon"></span>
                      <!-- /.fa fa-mobile wt-nav-icon -->
                      <span class="wt-nav-text">Menu</span>
                      <!-- /.wt-nav-text -->
                    </a>
                  </div>
                  <!-- /.wt-mobilelink -->
                </div>
                <!-- /.wt-navbar-mobile -->

                <!-- FADE-IN NAVBAR SECTION -->
                <div class="wt-navbar-wrapper fade-floating">
                  <div class="wt-nav-logo">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/11B-logo.png" alt="11th and Bay logo">
                  </div>
                  <!-- /.logo -->
                  <?php
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_id' => 'main',
    'container' => 'div',
    'container_class' => 'secondary',
    'menu_class' => 'wt-navbar',
));
?>
                </div>
                <!-- /.navbar-wrapper -->
                <!-- END FADE-IN NAVBAR SECTION -->
      </header>
      <!-- /.site-header -->


