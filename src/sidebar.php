<!-- Left sidebar -->
<div id="leftside">
    <ul>
        <li id="text-6" class="widget widget_text">
            <h2 class="widgettitle">Today&#8217;s Cryptics</h2>
			<div class="textwidget">
                <p>
                    <a href="http://www.ft.com/arts/crossword">Financial Times</a><br />
                    <a href="https://www.theguardian.com/crosswords/">Guardian</a><br />
                    <a href="http://puzzles.independent.co.uk/gamedetails/cryptic-crossword-independent/">Independent</a>
                </p>
            </div>
		</li>

        <?php dynamic_sidebar('Main Sidebar'); ?>

        <?php the_widget( 'WP_Widget_Categories' ); ?>
        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
        
    </ul>
</div>  