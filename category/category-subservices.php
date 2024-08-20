<?php //get_template_part('blocks/breadcrumbs/bread-block-1-cat'); ?>
<?php get_template_part('blocks/comblocks/comblock-cat'); ?>




<section class="section section-color section-divider-top section-divider-down">
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
				while( $query->have_posts() ){ $query->the_post(); ?>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <?php require ( get_template_directory()  . '/loop/loop-service/loop-service.php'); ?>
   </div>
   <?php	 }
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
				while( $query->have_posts() ){ $query->the_post(); ?>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <?php require ( get_template_directory()  . '/loop/loop-service/loop-service-2.php'); ?>
   </div>
   <?php	 }
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
  </div>
 </div>
</section>

<section class="section ">
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
				while( $query->have_posts() ){ $query->the_post(); ?>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <?php require ( get_template_directory()  . '/loop/loop-service/loop-service-3.php'); ?>
   </div>
   <?php	 }
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
  </div>
 </div>
</section>

<hr>


<?php 
//вывод seo текста
$numcat = get_query_var('cat');
$seo_content = get_field('seo_content', 'category_'.$numcat); 
?>

<section class="section">
	<div class="container cx-unique-block">
		<div class="title-block">
      <h1 class="title-block__title"><?php echo single_cat_title(); ?> </h1>
    </div>
			<?php echo $seo_content; ?>
	</div>
</section>

