<?php
/*
 Template Name: News
 */
 ?>
    <?php get_header(); ?>
    <div class="tm1 tm9">
        <ul>
            <li>
                <img src="<?php echo bloginfo('template_directory'); ?>/img/4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <span>News</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="tm10">
        <div class="container">
            <div class="row">
                <?php 
                  global $post;
                  $args = array('numberposts'=>1,'category'=>26);
                  $custom_posts = get_posts ($args);
                  foreach($custom_posts as $post) : setup_postdata($post); ?>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="tn">
                        <div class="tn1"><img src="<?php the_post_thumbnail(); ?>">
                            <!--                        <?php echo bloginfo('template_directory'); ?>/img/5.jpg" alt="-->
                        </div>
                        <div class="tn2">
                            <ul>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <li>
                                    Adam Baylin
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    <div class="row">
                        <?php 
                  global $post;
                  $args = array('numberposts'=>2,'category'=>27);
                  $custom_posts = get_posts ($args);
                  foreach($custom_posts as $post) : setup_postdata($post); ?>
                        <div class="col-md-6 col-xs-6">
                            <div class="tn tn3">
                                <div class="tn1"><img src="<?php the_post_thumbnail(); ?>" alt=""></div>
                                <div class="tn2">
                                    <ul>
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </li>
                                        <li>Adam Baylin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>
                <!--                end tin chinh-->
                <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-xs-offset-1">
                    <div class="tn4">
                        <?php 
                          global $post;
                          $args = array('numberposts'=>4,'category'=>28);
                          $custom_posts = get_posts ($args);
                          foreach($custom_posts as $post) : setup_postdata($post); ?>

                        <ul>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                            <li>Adam Baylin</li>
                        </ul>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="tm11">
        <div class="container">
            <div class="row">
                <?php 
              global $post;
              $args = array('numberposts'=>4,'category'=>29);
              $custom_posts = get_posts ($args);
              foreach($custom_posts as $post) : setup_postdata($post); ?>

                <div class="col-lg-6 col-md-6 col-xs-12 tn2">
                    <div class="row">
                        <div class="col-md-6 col-xs-4">
                            <div class="tn"><img src="<?php the_post_thumbnail(); ?>" alt=""></div>
                        </div>
                        <div class="col-md-6 col-xs-8">
                            <div class="tn1">
                                <ul>
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
                    </div>
                </div>
                <?php endforeach; wp_reset_postdata();?>

            </div>
        </div>
    </div>
    <div class="tm12">
        <div class="container">
            <div class="row">
                <?php 
              global $post;
              $args = array('numberposts'=>3,'category'=>30);
              $custom_posts = get_posts ($args);
              foreach($custom_posts as $post) : setup_postdata($post); ?>
                <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-xs-offset-1 tn2">
                    <div class="tn1">
                        <img src="<?php the_post_thumbnail(); ?>" alt="">
                    </div>
                </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
