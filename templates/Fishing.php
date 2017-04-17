<?php
/*
 Template Name: Fishing niche
 */
 ?>
    <?php get_header(); ?>
    <div class="tm13 tm22">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="tn1">
                        <ul>
                            <li><a href="#.">Jobs</a></li>
                            <li><a href="#.">Gym </a></li>
                            <li><a href="#.">Family</a></li>
                            <li><a href="#.">Yoga</a></li>
                            <li><a href="#.">Pets</a></li>
                            <li><a href="#.">Sports</a></li>
                            <li><a href="#.">MISC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm1 tm23">
        <ul>
            <li>
                <img src="<?php echo bloginfo('template_directory'); ?>/img/7.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <span>Fishing</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="tm3 tm24">
        <div class="container">
            <div class="row">
                <?php 
              global $post;
              $args = array('numberposts'=>4,'category'=>18,);
              $custom_posts = get_posts ($args);
              foreach($custom_posts as $post) : setup_postdata($post); ?>

                <div class="col-lg-3 col-md-3 col-xs-6">
                    <div class="tn2">

                        <ul>
                            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                            <li>
                                <?php the_excerpt(); ?>
                            </li>
                        </ul>

                    </div>
                </div>

                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>