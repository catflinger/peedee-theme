<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="author" content="theme by fifteensquared.net based an an original design by Andreas Viklund - http://andreasviklund.com" />

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()).'/blue2.css'; ?>" type="text/css" media="screen" />

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Main Container -->
        <div id="container">

            <!-- Ttile bar -->
            <div id="sitename">
                <h1>
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <h2>
                    <?php bloginfo('description'); ?>
                </h2>
            </div>


            <!-- The navigation menu -->
            <div id="mainmenu">
                <ul class="level1">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main',
                            'fallback_cb'    => 'pd_default_menu'
                        )); ?>
                </ul>
            </div>
