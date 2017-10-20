<?php
/*
  Plugin Name: Procyon Component: Navigation
  Plugin URI: https://bitbucket.org/dmpinder/procyon-component-navigation
  Description: A drop-in PHP component to create a WCAG-compliant logo. Based on the excellent 10up component library.
  Author: Darren Pinder, 10up
  Version: 1.0
  Author URI: https://vatu.co.uk
  GitHub Plugin URI: https://bitbucket.org/dmpinder/procyon-component-navigation
  GitHub Branch:     master
 */

function procyon_component_navigation() { 
    
    wp_enqueue_style( 'procyon_component_navigation_css', plugin_dir_url( __FILE__ ) . 'css/navigation.css', '', '1.0', '' );
    wp_enqueue_script( 'procyon_component_navigation_js', plugin_dir_url( __FILE__ ) . 'js/navigation.min.js', '', '1.0', '' );
    wp_enqueue_script( 'procyon_component_navigation_nav', plugin_dir_url( __FILE__ ) . 'js/nav-settings.js', '', '1.0', '' );
    ?>

    <nav class="site-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

        <a href="#primary-menu" id="js-menu-toggle" class="site-menu-toggle">
            <span class="screen-reader-text">
                <?php esc_html_e( 'Primary Menu', 'tenup' ); ?>
            </span>
            <span aria-hidden="true">☰</span>
        </a>

        <?php
            wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
				'menu'           => 'main-menu',
            ) );
        ?>
    </nav>

<?php } ?>
