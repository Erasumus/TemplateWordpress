<section class="section ">
	<div class="container">
		<div class="partner-slider-1">
			<?php 
			$i = 0;
			query_posts('posts_per_page=5&cat=5'); 
			if (have_posts()): while (have_posts()): the_post(); 
			get_template_part('loop/loop-partner'); 
			endwhile; 
			endif; ?>


		</div>
		<ul class="controls" id="customize-controls-parnters" aria-label="Carousel Navigation" tabindex="0">
			<li class="controls__item controls__item--prev" data-controls="prev" aria-controls="customize" tabindex="-1">
				<i class="fas fa-angle-left fa-1x"></i>
			</li>
			<li class="controls__item controls__item--next" data-controls="next" aria-controls="customize" tabindex="-1">
				<i class="fas fa-angle-right fa-1x"></i>
			</li>
		</ul>
	</div>
</section>
