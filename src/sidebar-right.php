<!-- Right Sidebar -->
<div id="rightside">
    <ul>
        <li class="widget widget_calendar">
            <h2 class="widgettitle">Calendar</h2>
            <div id="calendar_wrap" class="calendar_wrap">
                <?php get_calendar() ?>
            </div>
        </li>

        
        <?php dynamic_sidebar('Right Sidebar'); ?>

        <li class="widget widget_search">
            <?php the_widget( 'WP_Widget_Search' ); ?>
        </li>

        <li>
            <h2>Subscribe</h2>
            <ul>
                <li class="feed"><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
                <li class="feed"><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
            </ul>
        </li>

        <li>
            <h2>Meta</h2>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </li> 

        <li class="widget widget_archive">
            <?php the_widget( 'WP_Widget_Archives', 'dropdown=1' ); ?>
        </li>
    </ul>
</div>