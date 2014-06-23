<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
  <!--=== META TAGS ===-->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <!--=== LINK TAGS ===-->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!--=== TITLE ===--> 
  <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
   
  <!--=== WP_HEAD() ===-->
  <?php wp_head(); ?>
      
</head>
<body <?php body_class(); ?>>
  <header id="header-sm" class="show-xs">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="#"><img src="images/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mortgage Rates <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mortgage Calculators <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <header id="header-lg" class="hide-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-5 col-lg-5">
          <a class="logo" href="">
            <img src="images/logo.png">
          </a>
        </div>
        <div class="col-xs-7 col-sm-8 col-md-7 col-lg-7 hide-xs">
          <div class="row">
            <div class="col-sm-7 col-md-8 col-lg-8">
              <img src="images/likes.png" />
            </div>
            <div class="col-sm-5 col-md-4 col-lg-4 contact">
              <span class="icon icon-phone">Call 1-877-653-1339</span>
              <a class="btn green-gradient">
                <span class="glyphicon icon-bubbles"></span>
                Live Support Online
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="top">
    <div class="nav-container hide-xs">
      <div class="container">
        <nav>
          <ul class="clearfix">
            <li class="active"><a href="#">Home</a></li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mortgage Rates <b class="caret"></b></a>
              <ul>
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mortgage Calculators <b class="caret"></b></a>
              <ul>
                <li class="active"><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Apply Online</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </nav>        
      </div>
    </div>
  </div>