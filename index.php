<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/inc/banner.php' ); ?>
    <script>
    fbq('track', 'ViewContent', {
    content_type: 'Home',
    content_name: 'View at the top'
    });
    </script>
<div class="tm3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="tn1">
                    Staff Picks
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
              global $post;
              $args = array('numberposts'=>4,'category'=>4,);
              $custom_posts = get_posts ($args);
              foreach($custom_posts as $post) : setup_postdata($post); ?>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="tn2">

                    <ul>
                        <li><img src="<?php echo bloginfo('template_directory'); ?>/img/1.png" alt=""></li>
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
<div class="tm4">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offet-0 col-md-offset-0 col-xs-offset-1 tn3">
                <a href="#.">
                    <div class="tn1">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/4.png" alt="">
                        <div class="tn2">
                            <p>Fishing</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offet-0 col-md-offset-0 col-xs-offset-1 tn3">
                <a href="#.">
                    <div class="tn1">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/2.png" alt="">
                        <div class="tn2">
                            <p>Jobs</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offet-0 col-md-offset-0 col-xs-offset-1 tn3">
                <a href="#.">
                    <div class="tn1">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/3.png" alt="">
                        <div class="tn2">
                            <p>Gym</p>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
</div>
<div class="tm3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="tn1">
                    Sports
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
          global $post;
          $args = array('numberposts'=>4,'category'=>5);
          $custom_posts = get_posts ($args);
          foreach($custom_posts as $post) : setup_postdata($post); ?>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="tn2">

                    <ul>
                        <li><img src="<?php echo bloginfo('template_directory'); ?>/img/1.png" alt=""></li>
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

            <?php endforeach; wp_reset_postdata();?>



        </div>
    </div>
</div>
<div class="tm4">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offet-0 col-md-offset-0 col-xs-offset-1 tn3">
                <a href="#.">
                    <div class="tn1">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/5.png" alt="">
                        <div class="tn2">
                            <p>Family</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offet-0 col-md-offset-0 col-xs-offset-1 tn3">
                <a href="#.">
                    <div class="tn1">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/6.png" alt="">
                        <div class="tn2">
                            <p>Yoga</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-10 col-lg-offet-0 col-md-offset-0 col-xs-offset-1 tn3">
                <a href="#.">
                    <div class="tn1">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/7.png" alt="">
                        <div class="tn2">
                            <p>Pets</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-10 col-lg-offset-0 col-md-offset-0 col-xs-offset-1">
                <div class="tm5">

                </div>
                <div class="tm6">
                    <p>Browse Popular Categories</p>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1">
                <div class="tm7">
                    <a>
                        <?php the_tags(); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
