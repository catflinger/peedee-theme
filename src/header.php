<html>
    <head>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()).'/blue2.css'; ?>" type="text/css" media="screen" />
    </head>
    <body>
        <!-- Main COntainer -->
        <div id="container">

        <!-- Ttile bar -->
        <div id="sitename">
                <h1>Fiteensquared</h1>
                <h3>Never knowingly undersolved</h3>
            </div>

            <!-- Menu bar -->
            <div id="mainmenu">
                <ul class="level1">
                    <li>
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </li>
                </ul>
            </div>

            <!-- opening of wrap div, to be closed on footer -->
            <div id="wrap">