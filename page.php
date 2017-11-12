<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="tm34">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="post" id="post-<?php the_ID(); ?>">

                    
                    <div class="tn1">
                        <?php the_title(); ?>
                    </div>
                    

                    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

                    <div class="entry">

                        <?php the_content(); ?>

                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                    </div>

                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

                </div>

                <?php // comments_template(); ?>

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
