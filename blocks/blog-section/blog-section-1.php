<section class="blog-section-1">
	<div class="container">
	<div class="title-block">
			<p class="title-block__title"> Блог и новости </p>
			<p class="title-block__subtitle"> Последние события: </p>
		</div>
		
		<div class="row">
			<?php 
			$i = 0;
			query_posts('posts_per_page=3&cat=3');
			if (have_posts()): while (have_posts()): the_post();  
			get_template_part('loop/loop-blog/loop-blog'); 
			endwhile; 
			endif; ?>
		</div>
	</div>
</section>
