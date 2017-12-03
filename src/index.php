
<?php get_header(); ?>


<div id="wrap">

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
                        Posted by 
                        
                        <?php if (get_the_author_meta('url')) { ?>
                            <a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a>
                        <?php } else { 
                            the_author(); 
                        } ?> 
                        on <?php the_time ('F jS, Y') ?>
                    </p>
                
                    <div class="entry">
                        <img 
                            src="<?php echo esc_url(home_url()); ?>/wp-content/images/authors/<?php the_author_meta('ID');?>.jpg" 
                            class="auth" alt="<?php the_author(); ?>. " 
                            title="<?php the_author(); ?> "/>	
                
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                    </div>
                
                    <p class="category">Posted in 
                        <?php the_category(', ') ?> | 
                        <?php edit_post_link('Edit', '', ' | '); ?>  
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </p>
                
                </div> <?php
            }
        }
        ?>
    </div>
</div>


<?php get_footer(); ?>

