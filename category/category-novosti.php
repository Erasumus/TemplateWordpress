<section class="mb-5">
	<div class="container">
		<div class="row">
			
<section class="mb-5 sec-padding">
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
				while( $query->have_posts() ){ $query->the_post(); 
											  require ( get_template_directory()  . '/loop/loop-news.php');
											 }
				wp_reset_postdata(); // сбрасываем переменную $post
			}

			?>
		</div>
	</div>
</section>
		</div>
	</div>