<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--[if lt IE 9]>
	 <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
     <![endif]-->
     <meta property="fb:pages" content="947961191975824" />
     <meta property="fb:app_id" content="1514019788687847" />
     <meta property="fb:admins" content="100001910866760"/>

    <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php } ?>

    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>

    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet/less" href="<?php echo bloginfo('template_directory'); ?>/css/master.less">
    <script src="<?php echo bloginfo('template_directory'); ?>/js/less.min.js"></script>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/max.js"></script>
    <meta property="og:url" content="
<?php get_page_link($id, $leavename, $sample); ?>

" />
    <meta property="og:type" content="Beautiful T-shirt" />
    <meta property="og:title" content="Tee Molly - Beautiful designs & Addictive *** - <?php the_title(); ?>" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1765637537049442'); // Insert your pixel ID here.
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1765637537049442&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-32553637-3', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1514019788687847';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body <?php body_class(); ?>>

    <div class="tm">
        <div class="container">
            <div class="row justify-content-sm-center">
                <ul class="col-xl-5 col-lg-5 col-md-5 col-sm-auto">
                    <li>
                        <a href="
<?php echo esc_url( home_url( '/' ) ); ?>

">
                            <p>Tee Molly</p>
                        </a>
                    </li>
                    <li>
                        <p>Beautiful designs & Addictive ***</p>
                    </li>
                </ul>
                <ul class="col-xl col-lg col-md col-sm-0"></ul>
                <ul class="col-xl-auto col-lg-auto col-md-auto col-sm-auto">
                    <?php wp_nav_menu(array('menu'=>'menu')) ?>
                </ul>
            </div>
        </div>
        <div class="tn1"></div>
    </div>
