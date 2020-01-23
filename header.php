<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <?php if(is_article()): ?>
    <title><?php echo article_title(); ?> | Nathan Green Photography</title>
    <meta property="og:title" content="<?php echo article_title(); ?> | Nathan Green Photography">
    <meta property="og:type" content="article">
    <meta name="description" content="<?php echo article_description(); ?>">
    <meta property="og:description" content="<?php echo article_description(); ?>">
  <?php else: ?>
    <title><?php echo page_custom_field('meta_title'); ?></title>
    <meta property="og:title" content="<?php echo page_custom_field('meta_title'); ?>">
    <meta property="og:type" content="website">
    <meta name="description" content="<?php echo page_custom_field('meta_description'); ?>">
    <meta property="og:description" content="<?php echo page_custom_field('meta_description'); ?>">
  <?php endif; ?>


  <?php
    $manifest = json_decode(file_get_contents(__DIR__. '/manifest.json'), true);
    $cssFile = $manifest['main.css'];
  ?>

  <link rel="preload" as="style" href="<?php echo theme_url('/css/' . $cssFile); ?>">
  <link rel="stylesheet" href="<?php echo theme_url('/css/' . $cssFile); ?>">
  <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo theme_url('img/apple-icon-60x60.png'); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo theme_url('img/apple-icon-72x72.png'); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo theme_url('img/apple-icon-76x76.png'); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo theme_url('img/apple-icon-114x114.png'); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo theme_url('img/apple-icon-120x120.png'); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo theme_url('img/apple-icon-144x144.png'); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo theme_url('img/apple-icon-152x152.png'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo theme_url('img/apple-icon-180x180.png'); ?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo theme_url('img/android-icon-192x192.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo theme_url('img/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo theme_url('img/favicon-96x96.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo theme_url('img/favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?php echo theme_url('img/manifest.json'); ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo theme_url('img/ms-icon-144x144.png'); ?>">
  <meta name="theme-color" content="#805AD5">
  

  <!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <meta name="viewport" content="width=device-width">
  <meta property="og:url" content="<?php echo complete_url(); ?>">
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="800" />
  <meta property="og:site_name" content="<?php echo site_name(); ?>">
  <?php if(is_article() && !article_custom_field('og:image')): ?>
    <meta property="og:image" content="<?php echo base_domain_url(article_custom_field('og_image')); ?>">
  <?php else: ?>
    <meta property="og:image" content="<?php echo base_domain_url() . theme_url('img/og_image.jpg'); ?>">
  <?php endif; ?>
</head>

<body class="<?php echo body_class(); ?>">
  <div class="flex flex-col mh-100vh">
    <header class="py-5">
      <div class="px-6 flex justify-between items-center">
        <a href="<?php echo base_url(); ?>" aria-label="Home"><img src="<?php echo theme_url('img/logo.svg'); ?>"
            class="" width="170px" alt="Nathan Green Photography logo"></a>
            <a class="c-btn" href="<?php echo base_url(); ?>posts" title="Read photography articles written by Nathan Green">Read blog</a>
      </div>
    </header>