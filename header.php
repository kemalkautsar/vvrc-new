<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<head>
<title>vvrc-wp</title>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<!-- this is the start of the header up to section just before the body part -->

<body>
<div id="ttr_header" class="jumbotron">
<h1>Menu</h1>
</div>

<div class="menu">
    
<span>
    <?php    
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    ?>
</span>

<?php 
    wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>

<span>Login</span>

</div>

<div class="container">