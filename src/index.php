
<?php get_header(); ?>

<?php get_sidebar(); ?>          

<?php get_sidebar('right'); ?>          

<!-- Content -->
<div id="content">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) { ?>
            <?php the_post(); ?>

            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            
                <p class="date">
                    <?php _e('Posted by','wp-andreas225'); ?> 
                    
                    <?php if (get_the_author_meta('url')) { ?>
                        <a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a>
                    <?php } else { 
                        the_author(); 
                    } ?> 
                    <?php _e('on','wp-andreas225'); ?> <?php the_time (__('F jS, Y','wp-andreas225')) ?>
                </p>
            
                <div class="entry">
                    <img 
                        src="<?php echo esc_url(home_url()); ?>/wp-content/images/authors/<?php the_author_meta('ID');?>.jpg" 
                        class="auth" alt="<?php the_author(); ?>. " 
                        title="<?php the_author(); ?> "/>	
            
                    <?php the_content(__('Read the rest of this entry &raquo;','wp-andreas225')); ?>
                </div>
            
                <p class="category"><?php _e('Posted in','wp-andreas225'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit','wp-andreas225'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','wp-andreas225'), __('1 Comment &#187;','wp-andreas225'), __('% Comments &#187;','wp-andreas225')); ?></p>
            
            </div> <?php
        }
    }
    ?>
</div>

<?php get_footer(); ?>

