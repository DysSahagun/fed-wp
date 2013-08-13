<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <title><?php wp_title( '—', true, 'right' ); ?></title>
        
        <meta name="description" content="Document content description">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <meta property="og:type" content="website"> <!-- There are other types for this -->
        <meta property="og:site_name" content="Site title">
        <meta property="og:url" content="http://">
        <meta property="og:description" content="Document content description">
        <meta property="og:image" content=""> <!-- URL of the thumbnail image that will appear in FB feeds; must be AT LEAST 200 x 200 px -->

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="page" class="hfeed site">
        
            <header id="masthead" class="site-header" role="banner">
                <div id="masthead-cr">                    
                    <div class="masthead-headers">
                        <h1 class="site-title"><a class="site-title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                    </div>
                    <nav id="js-main-nav" class="main-nav main-nav-hide" role="navigation">
                        <h1 id="js-menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h1>
                        <a class="assistive-text" href="#content" title="Skip to content"><?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						<?php get_search_form(); ?>
                    </nav>
                </div>
            </header><!--#branding-->
            
            <div id="main">
                <div id="main-cr">