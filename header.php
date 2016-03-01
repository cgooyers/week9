<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Lato:100,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
  <meta name="google-site-verification" content="RXG2NuzdrKQS0IblPLq4wJBWhyAp4svzVX8NFVY7TXA" />
</head>

<body <?php body_class(); ?>>
  <div class="grid">
  <header class="main-header">
    <div class="grid__item one-half portable--one-third">
      <img id="dime" src="dime.png" alt="">
    </div>
    <div class="grid__item one-half portable--two-thirds palm--one-whole">
      <div class="button-container">
       <button class="hamburger hamburger-plus">
         <span>toggle menu</span>
       </button>
      </div>
    </div>
    <div class="container header-container animated transition-out hide">
     <!--  <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>  -->

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
    </div>
  </header>
</div>