<section class="section section-review-image">
	<div class="container">
		<div class="title-block">
			<p class="title-block__title"> Отзывы </p>
			<p class="title-block__subtitle"> Наших дорогих клиентов </p>
		</div>
		<div class="review-slider-2">
			<?php 
			$i = 0;
			query_posts('posts_per_page=5&cat=6'); 
			if (have_posts()): while (have_posts()): the_post(); 
				get_template_part('loop/loop-reviews/loop-review-2'); 
			endwhile; 
			endif;
			?>
		</div>
		<ul class="controls" id="customize-controls-review-2" aria-label="Carousel Navigation" tabindex="0">
			<li class="controls__item controls__item--prev" data-controls="prev" aria-controls="customize" tabindex="-1">
				<i class="fas fa-angle-left fa-1x"></i>
			</li>
			<li class="controls__item controls__item--next" data-controls="next" aria-controls="customize" tabindex="-1">
				<i class="fas fa-angle-right fa-1x"></i>
			</li>
		</ul>
		 <button class="button review-section-2__button" href="/">Все отзывы</button>
	</div>
</section>