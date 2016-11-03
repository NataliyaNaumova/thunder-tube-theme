<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>
  </head>

  <body  <?php body_class(); ?>>

    <nav class="navbar navbar-static-top navbar-dark bg-inverse">
       <a class="navbar-brand" href="#">Project name</a>
       <?php
          wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'nav',
              'container_class'   => 'navbar navbar-static-top navbar-dark bg-inverse',
      'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
      ?>
     </nav>

<!-- <ul class="nav navbar-nav">
     <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">About</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Contact</a>
     </li>
   </ul>  -->
