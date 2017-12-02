<?php
/*
Single Post Template: T-shirt
infor: Theme for post t-shirt
*/
?>
    <?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        fbq('track', 'ViewContent', {
            content_type: 'Product',
            content_name: 'xxx'
        });

        function fbshareCurrentPage() {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + escape(window.location.href) + "&t=" + document.title, '',
                'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
            return false;
        }

    </script>
    <div class="tm21">
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
    <div class="tm37"></div>

    <?php get_footer(); ?>
