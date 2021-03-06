<?php
/*
 Template Name: Staff Picks & Misc niche
 */
 ?>
  <?php get_header(); ?>
    <div class="tm13 tm22">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tn1">
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=69">Fishing</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=107">Jobs</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=113">Gym </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=115">Family</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=119">Yoga</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=123">Pets</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=127">Sports</a></li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <span>Misc</span>
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
              $args = array('numberposts'=>12,'category'=>4,);
              $custom_posts = get_posts ($args);
              foreach($custom_posts as $post) : setup_postdata($post); ?>

                <div class="col-lg-3 col-md-3 col-sm-6">
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

   <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
   
    <?php get_footer(); ?>