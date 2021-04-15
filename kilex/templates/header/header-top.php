<nav class="navbar navbar-dark bg-dark" id="main-navbar">
<div class="title">
<a href="<?php echo esc_url( home_url('/'));?>" rel="home" id="title">
<?php
    // Display the Custom Logo
    the_custom_logo('mytheme-logo');
    // No Custom Logo, just display the site's name
    if (!has_custom_logo()) {
?>
        <h1 style="text-align:center;"><?php bloginfo('name'); ?></h1>
        <?php
    }
?>
</a>
</div>
<div class="nav-links">
  <?php //Main menu
            $args = [
              'theme_location' => 'main-menu',
              
            ];
            wp_nav_menu( $args );
            
  ?>

</div>

        </nav>