<!DOCTYPE html>
<html>

<head>
  <?php	wp_head(); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLES -->
  <link rel="stylesheet" rel="prefetch" href="<?php bloginfo( 'template_url' ); ?>/css/normalise.css?4">
	<link rel="stylesheet" rel="prefetch" href="<?php bloginfo( 'template_url' ); ?>/css/flexboxgrid.css">


	<link rel="stylesheet" rel="prefetch" href="<?php bloginfo( 'template_url' ); ?>/css/critical.css?42">
  <link rel="stylesheet" rel="prefetch" href="<?php bloginfo( 'template_url' ); ?>/css/main.css?8018"> 

  <!-- FontAwesome -->
  <link rel="stylesheet" rel="prefetch" href="<?php bloginfo( 'template_url' ); ?>/fonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" rel="prefetch"
    href="<?php bloginfo( 'template_url' ); ?>/fonts/font-awesome/css/regular.min.css">
  <link rel="stylesheet" rel="prefetch"
    href="<?php bloginfo( 'template_url' ); ?>/fonts/font-awesome/css/solid.min.css">
  <link rel="stylesheet" rel="prefetch"
    href="<?php bloginfo( 'template_url' ); ?>/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" rel="prefetch"
    href="<?php bloginfo( 'template_url' ); ?>/fonts/font-awesome/css/brands.min.css">




  <link rel="stylesheet" rel="prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">


  <!-- метрики -->
  <?php $metrics = get_field('metrics', 'option'); 
		foreach($metrics as $code) {
			if(isset($code)) echo $code;
		} ?>
  <!-- метрики -->

</head>

<body>

  <?php get_template_part('blocks/headers/header-default'); ?>