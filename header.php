<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />

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
</head>

<body <?php body_class(); ?>>

    <div class="tm">
        <div class="container">
            <div class="row">
                <ul class="col-lg-5 col-md-5 col-xs-6 col-lg-offet-0 col-md-offset-0 col-xs-offset-3">
                    <li>
                        <a href="#.">
                            <p>Tee Molly</p>
                        </a>
                    </li>
                    <li>
                        <p>Beautiful designs & Addictive ***</p>
                    </li>
                </ul>
                <ul class="col-lg-4 col-md-5 col-xs-9 col-lg-offet-0 col-md-offset-0 col-xs-offset-3 pull-right">
                    <?php wp_nav_menu(array('menu'=>'menu')) ?>
                </ul>
            </div>
        </div>
        <div class="tn1"></div>
    </div>
