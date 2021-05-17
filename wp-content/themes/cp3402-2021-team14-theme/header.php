<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CP3402_2021_Team14_Theme
 *
 * We want the logo and navigation at the top and on the home page we want 2 images below.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <!-- used for accessibility purposes -->
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cp3402-2021-team14-theme' ); ?></a>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'humescores' ); ?></a>

        <?php if ( get_header_image() ) : ?>
            <figure class="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                </a>
            </figure><!-- .header-image -->
        <?php endif; // End header image check. ?>

        <header id="masthead" class="site-header">
		<div class="site-branding"><!-- contains site title and description -->

            <!-- if homepage, display site name in H1 size  Remove these to not show site name -->
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

            <?php

            //shows the logo top left
            the_custom_logo();

            //add "Just another WordPress site"
            $cp3402_2021_team14_theme_description = get_bloginfo( 'description', 'display' );

            if ( $cp3402_2021_team14_theme_description || is_customize_preview() ) :
                ?>

                <p class="site-description"><?php echo $cp3402_2021_team14_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif;
            ?>



		</div>

        <!-- .site-branding -->

        <!-- navigation -->
		<nav id="site-navigation" class="main-navigation"><!-- contains navigation -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cp3402-2021-team14-theme' ); ?></button>
			<?php

            //navigation links
            wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>


		</nav><!-- #site-navigation -->



	</header><!-- #masthead -->

