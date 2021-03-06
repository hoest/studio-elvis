<?php

$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
          echo " - Welkom";
        }
      ?>
    </title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Mukta+Vaani:700,100,300" />
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.css" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <meta name="author" content="<?php bloginfo('name'); ?>" />
    <meta name="keywords" content="Studio Elvis, Jochum de Jong, Jochum, de Jong, Grafisch, Desgign, Soest" />

    <meta property="og:locale" content="nl_NL" />
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/logo-fb.png" />
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

    <?php if(is_home() || is_front_page()) { ?>
    <meta property="og:title" content="Welkom bij <?php bloginfo('name'); ?>"/>
    <?php } else { ?>
    <meta property="og:title" content="<?php echo trim(wp_title('', false)); ?>"/>
    <?php } ?>

    <!-- if page is content page -->
    <?php if (is_single()) { ?>
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta property="og:type" content="article" />

    <!-- if page is others -->
    <?php } else { ?>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <?php } ?>

    <?php wp_head(); ?>
  </head>
  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-76314854-1', 'auto');
      ga('send', 'pageview');

    </script>
    <div class="outer-wrapper">
      <header>
        <div class="inner-header">
          <div class="logo">
            <a href="/" style="<?php if(isset($image, $image[0])) { echo "background-image: url('".$image[0]."')"; }?>">
              <span class="inner-logo">
              <?php bloginfo('name'); ?>
              </span>
            </a>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </header>
