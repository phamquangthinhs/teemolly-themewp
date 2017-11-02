<?php
/*
 Template Name: Quotes
 */
 ?>
    <?php get_header(); ?>
    <div class="tm1 tm25">
        <ul>
            <li>
                <img src="<?php echo bloginfo('template_directory'); ?>/img/12.jpg" alt="">
            </li>
        </ul>
    </div>
    <div class="tm29">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="tn1">
                        Top Quotes for t-shirt
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 col-xs-12 col-lg-offset-2 col-md-offset-1 col-xs-offset-0">
                    <div class="tn2">
                        <ul>
            <?php 
              global $post;
              $args = array('numberposts'=>6,'category'=>20,);
              $custom_posts = get_posts ($args);
              foreach($custom_posts as $post) : setup_postdata($post); ?>
                            <li><?php the_title(); ?></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="tn1">
                        Send us a quotes
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="tn2">
                        You send us quotes; we will design a shirt based on that quotes. Finally, you will receive a link to buy the shirt through the email you provide us.
                    </div>
                    <div class="tn3">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/13.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-xs-12 col-lg-offset-1 col-md-offset-0 col-xs-offset-0">
                 <div class="tn4">
                     <?php the_content(); ?>
                 </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
