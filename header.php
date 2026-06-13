<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- TOP NAVIGATION -->
    <nav class="top-nav">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/onstage_logo_transparent.png" alt="On Stage Logo" class="nav-logo">
            </a>
            <ul class="nav-links">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'fallback_cb' => false
                    ) );
                } else {
                    ?>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">PROGRAMS & CLASSES</a></li>
                    <li><a href="#">SHOWS & TICKETS</a></li>
                    <li><a href="#">SCHOLARSHIPS</a></li>
                    <li><a href="#">COSTUME RENTALS</a></li>
                    <li><a href="#">PHOTO GALLERY</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
