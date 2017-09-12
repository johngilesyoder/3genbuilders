<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head <?php do_action( 'add_head_attributes' ); ?>>

    <!-- Title -->
    <!-- =================================== -->
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <!-- =================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Meta -->
    <!-- =================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Wordpress Generated -->
    <!-- =================================== -->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <!-- Google Analytics -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/analyticstracking' ); ?>

    <!-- Facebook -->
    <!-- =================================== -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '#############',
          xfbml      : true,
          version    : 'v2.6'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>


    <!-- Navbar -->
    <!-- =================================== -->

    <nav class="site-header navbar navbar-fixed-top navbar-inverse navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- Mobile menu toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="brand-statement">Missoula's affordable homebuilders for over 60 years.</span>
          <a href="tel:4062409857" class="phone-number"><i class="material-icons">phone</i> (406) 240-9857</a>
          <!-- Site logo -->
          <a class="navbar-brand" href="/">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="3Gen Builders">
          </a>
        </div>
        <!-- Collect the nav links for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="/news">News</a></li> -->
        <li class="dropdown projects-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="dropdown-toggle-text">Projects <i class="material-icons">keyboard_arrow_down</i></span></a>
          <ul class="dropdown-menu">
            <li><a href="#project-1">6770 Roberta Drive</a></li>
            <li><a href="#project-2">Maroon Court / Lot 10 Florence, Montana</a></li>
            <li><a href="#project-3">The Cottages at Linda Vista</a></li>
          </ul>
        </li>
      </ul>
        </div>
      </div>
    </nav>
