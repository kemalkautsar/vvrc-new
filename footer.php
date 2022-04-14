

<div id= "ttr_footer">
<h1>FOOTER</h1>

<div class="menu-footer">
    <span>
        <?php    
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>
    </logo>
    <?php 
        wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
    ?>
</div>

</div>
</div>
</body>
</html>