<?php
/**
 * The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RaptorCorpz
 * @since Bootstrap to WordPress 2.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <title>Bootstrap to WordPress 2.0</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-dark bg-dark fixed-top mobile-menu ">
  <div class="container-fluid ">
    <a class="navbar-brand " href="#">Fortitude</a>
    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header bg-secondary">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark"> 

        <!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul> -->

        <?php
        wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'offcanvas-body bg-dark',
          'container_id'    => 'mobileNavbar',
          'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3 ',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

       <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>


<div class="text-center bg-dark sticky-top">
      <a class="navbar-brand mx-2 " href="#">Fortitude</a>
    </div>
<div class="sticky-top dt-sticky">
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark justify-content-center dt-menu " >
      
       <!-- <div class="collapse navbar-collapse justify-content-end" id="navbarScroll" >
       <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll navbar-left" style="--bs-scroll-height: 100px;" >
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Home</a>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        </ul>  
        
      </div>-->
      <!-- <?php
        wp_nav_menu( array(
          'theme_location'  => 'left',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'navbar bg-dark ',
          'container_id'    => 'deskTopNavbar',
          'menu_class'      => 'navbar-nav my-2 my-lg-0 navbar-nav-scroll dt-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?> -->

<!-- 
    <div class="justify-content-center">
      <a class="navbar-brand mx-2 " href="#">Fortitude</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div> -->


      <!-- <div class="collapse navbar-collapse " id="navbarScroll">      
        <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll navbar-right" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Link</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
      </div> -->
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'navbar bg-dark ',
          'container_id'    => 'navbarTop',
          'menu_class'      => 'navbar-nav my-2 my-lg-0 navbar-nav-scroll ',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

</nav>
</div>
  
