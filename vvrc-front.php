<?php
/**
* Template Name: vvrc front page
*
* @package WordPress
* @subpackage vvrc-theme
* @since vvrc-theme 1.0
*/?>

<script rel="stylesheet" src="<?php bloginfo('template_url')?>/vvrc-front-style.css">
</script>

<?php get_header(); ?>


<div class="container">
  <div class="row" id="hero">
    <div class="col-xs-12 col-lg-6">
      A Simple Bookmark Manager
      
      A clean and simple interface to organize your favourite websites. Open a New Browser tab and see your sites load instantly. try it for free
      
      Get it on Chrome
      Get it on Firefox
    </div>
    <div class="col-xs-12 col-lg-6">
      Column kanan
      
        <object type="image/svg+xml" data="<?php bloginfo('template_url')?>/images/illustration-hero.svg">
            Kiwi Logo <!-- fallback image in CSS -->
        </object>
    </div>
  </div>
  
    <div class="row" id="features">
    <div class="col">
      Features
      
      Our aim is to make it quick and easy for you to access your favourite websites. Your bookmarks sync between your devices so you can access them on the go
    </div>
  </div>
  
    <div class="row" id="downloads">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
  
    <div class="row" id="faq">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>

<?php get_footer(); ?>