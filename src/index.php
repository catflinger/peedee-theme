<html>
    <head><?php wp_head(); ?></head>
    <body>

        <div id="pd-container">
            <div id="left-sidebar" class="sidebar">left sidebar</div>
            <div id="content" class="content">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        the_title( '<h3>', '</h3>' );
                        the_content();
                    }
                }
                ?>
                </div>
            <div id="right-sidebar" class="sidebar">left sidebar</div>
        </div>
        <?php
            wp_footer();
        ?>
    </body>
</html>