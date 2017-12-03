<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()).'/blue2.css'; ?>" type="text/css" media="screen" />

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Main Container -->
        <div id="container">
            <div id="sitename">
                <!-- Ttile bar -->
                <h1>
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                
                <h2>
                    <?php bloginfo('description'); ?>
                </h2>
            </div>

            <!-- Menu bar -->
            <div id="mainmenu">
                <ul class="level1">
                    <li>
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </li>
                </ul>
            </div>
