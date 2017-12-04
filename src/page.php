
<?php get_header(); ?>


<div id="wrap">

    <?php get_sidebar(); ?>          

    <?php get_sidebar('right'); ?>          

    <!-- Content -->
    <div id="content">

        <div id="page">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>

                <div class="entrytext">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                </div>

                <?php wp_link_pages(array(
                    'before' => '<p><strong>Pages:</strong> ', 
                    'after' => '</p>', 
                    'next_or_number' => 'number')); ?>

            <?php endwhile; endif; ?>

        </div>

        <?php comments_template(); ?>

        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>
</div>

<?php get_footer(); ?>