<?php 
/*
Template Name: FrontPage
*/
require('header.php');
?>


<main class="wrapper">
	
	<!-- Слайдер -->
	<?php get_template_part('blocks/sliders/slider-section-1'); ?>
	<?php get_template_part('blocks/sliders/slider-section-2'); ?>
	
	<!-- Преимущества -->
	<?php get_template_part('blocks/features/feature-section-1'); ?>

	<!-- О нас -->
	<?php get_template_part('blocks/about/about-section-1'); ?>
	<?php get_template_part('blocks/about/about-section-2'); ?>

	<!-- Услуги -->
	<?php get_template_part('blocks/services/service-card-1'); ?>
	<?php get_template_part('blocks/services/service-card-2'); ?>
	<?php get_template_part('blocks/services/service-card-3'); ?>
	<?php get_template_part('blocks/services/service-card-4'); ?>
	<?php get_template_part('blocks/services/service-card-5'); ?>

	<!-- Партнеры -->
	<?php get_template_part('blocks/partners/partners-section-1'); ?>

	<!-- Отзывы -->
	<?php get_template_part('blocks/reviews/review-section-1'); ?>
	<?php get_template_part('blocks/reviews/review-section-2'); ?>
	<?php get_template_part('blocks/reviews/review-section-3'); ?>
	<?php get_template_part('blocks/reviews/review-section-4'); ?>

	<!-- Новости/блог -->
	<?php get_template_part('blocks/blog/blog-section-1'); ?>
	<?php get_template_part('blocks/blog/blog-section-2'); ?>
	<?php get_template_part('blocks/blog/blog-section-3'); ?>
	
	<!-- Обратная связь -->
	<?php get_template_part('blocks/contact/contact-section-1'); ?>
	<?php get_template_part('blocks/contact/contact-section-2'); ?>
	
	<!-- Галлерея -->
	<?php get_template_part('blocks/gallery/gallery-section-1'); ?>
	<?php get_template_part('blocks/gallery/gallery-section-2'); ?>

	<!-- Команда -->
	<?php get_template_part('blocks/team/team-section-1'); ?>
	<?php get_template_part('blocks/team/team-section-2'); ?>
	
	<?php get_template_part('blocks/team/team-section-3'); ?>
	
	<!-- Плашки/предложки -->
	<?php get_template_part('blocks/sales/sales-section-1'); ?>
	<?php get_template_part('blocks/sales/sales-section-2'); ?>
	<?php get_template_part('blocks/sales/sales-section-3'); ?>
	
</main>


<?php 
require('footer.php'); 
?>