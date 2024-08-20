<?php
/*
Template Name: main category
*/
?>

<?php get_template_part('blocks/comblocks/comblock-cat'); ?>




<section class="section section-color section-divider-top section-divider-down">
	<div class="container">
		<div class="row">
			<?php
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			$cat_args=array(
				'child_of' => $numcat,
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$categories=get_categories($cat_args);
			foreach($categories as $category) {
				$args=array(
					'category__in' => array($category->term_id),
					'caller_get_posts'=>99
				);
				$posts=get_posts($args);
				if ($posts) {
					require ( get_template_directory()  . '/loop/loop-service-cat/loop-service-cat-1.php'); 
				}
			}
			?>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row">
			<?php
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			$cat_args=array(
				'child_of' => $numcat,
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$categories=get_categories($cat_args);
			foreach($categories as $category) {
				$args=array(
					'category__in' => array($category->term_id),
					'caller_get_posts'=>99
				);
				$posts=get_posts($args);
				if ($posts) {
					require ( get_template_directory()  . '/loop/loop-service-cat/loop-service-cat-2.php'); 
				}
			}
			?>
		</div>
	</div>
</section>

<section class="section  section-color section-divider-top section-divider-down">
	<div class="container">
		<div class="row">
			<?php
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			$cat_args=array(
				'child_of' => $numcat,
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$categories=get_categories($cat_args);
			foreach($categories as $category) {
				$args=array(
					'category__in' => array($category->term_id),
					'caller_get_posts'=>99
				);
				$posts=get_posts($args);
				if ($posts) {  
					require ( get_template_directory()  . '/loop/loop-service-cat/loop-service-cat-3.php'); 
				}
			}
			?>
		</div>
	</div>
</section>

<section class="section ">
	<div class="container">
		<div class="row">
			<?php
			$category = get_queried_object()->term_id; //объект категории
			$numcat = get_query_var('cat');
			$cat_args=array(
				'child_of' => $numcat,
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$categories=get_categories($cat_args);
			foreach($categories as $category) {
				$args=array(
					'category__in' => array($category->term_id),
					'caller_get_posts'=>99
				);
				$posts=get_posts($args);
				if ($posts) {
					require ( get_template_directory()  . '/loop/loop-service-cat/loop-service-cat-4.php'); 
				}
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



<?php get_template_part('blocks/contact-block/contact-section-2'); ?>