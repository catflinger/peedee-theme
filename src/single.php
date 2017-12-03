
<?php get_header(); ?>

<?php get_sidebar(); ?>          

<?php get_sidebar('right'); ?> 

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="navigation">
		<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
		<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

		<p class="date">
            Posted by
            <?php if (get_the_author_meta('url')) { ?>
                <a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a>
            <?php } else { the_author(); } ?> 
            <?php _e('on','wp-andreas225'); ?> 
            <?php the_time (__('F jS, Y','wp-andreas225')) ?>
        </p>

		<div class="entrytext">
            <img src="<?php echo esc_url( home_url() ); ?>/wp-content/images/authors/<?php the_author_meta('ID');?>.jpg" 
                class="auth" 
                alt="<?php the_author(); ?>. " 
                title="<?php the_author(); ?> "/>

			<?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>

        <?php wp_link_pages(array(
            'before' => '<p><strong>'.__('Pages:','wp-andreas225').'</strong> ',
            'after' => '</p>', 
            'next_or_number' => 'number')); ?>

        <p class="postmetadata">

            This entry was posted on <?php the_time(__('l, F jS, Y','wp-andreas225')) ?> 
            and is filed under <?php the_category(', ') ?>.
            You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed. 

            You can skip to the end and leave a response.

            <?php edit_post_link('Edit this entry.','',''); ?>

        </p>		
	</div>

	<?php comments_template(); ?>


    <div class="bottomnavigation">
        <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
        <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
    </div>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.','wp-andreas225'); ?></p>
	<?php endif; ?>
</div>


<?php get_footer(); ?>