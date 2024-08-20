<?php get_template_part('blocks/breadcrumbs/bread-block-1-cat'); ?>

<section class="section">
	<div class="container">
		<div class="row">
			<?php 
			//цикл постов категории
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			//вывод записей в категории
			$query = new WP_Query(array(
				'numberposts' => 15,
				'category__in'    => $numcat,
				'suppress_filters' => true, 
			)); 
			if( $query->have_posts() ){
				while( $query->have_posts() ){
					$query->the_post(); ?>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				     <?php	require ( get_template_directory()  . '/loop/loop-team/loop-team.php'); ?>
    </div>
    <?php
				}
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
		</div>
	</div>
</section>



<section class="section">
	<div class="container">
		<div class="row">
			<?php 
			//цикл постов категории
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			//вывод записей в категории
			$query = new WP_Query(array(
				'numberposts' => 15,
				'category__in'    => $numcat,
				'suppress_filters' => true, 
			)); 
			if( $query->have_posts() ){
				while( $query->have_posts() ){
					$query->the_post(); ?>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				     <?php	require ( get_template_directory()  . '/loop/loop-team/loop-team-2.php'); ?>
    </div>
    <?php
				}
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
		</div>
	</div>
</section>



<section class="section">
	<div class="container">
		<div class="row">
			<?php 
			//цикл постов категории
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			//вывод записей в категории
			$query = new WP_Query(array(
				'numberposts' => 15,
				'category__in'    => $numcat,
				'suppress_filters' => true, 
			)); 
			if( $query->have_posts() ){
				while( $query->have_posts() ){
					$query->the_post(); ?>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				     <?php	require ( get_template_directory()  . '/loop/loop-team/loop-team-3.php'); ?>
    </div>
    <?php
				}
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
		</div>
	</div>
</section>




<?php get_template_part('blocks/contact-block/contact-section-2'); ?>