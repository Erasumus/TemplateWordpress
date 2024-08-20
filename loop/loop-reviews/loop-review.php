<?php 
$short_description = get_field('short_description'); 
$author = get_field('review_author'); 
$author_image = get_field('review-img');
?>

<div class="review-slider-1__item" >
	<div class="review">
		<div class="review__info">
			<div class="review__author">
				<div class="review__image">
					<img class="img-fluid" src="<?php echo $author_image;?>" alt="автор"> 
				</div>
				<div class="review__block-name">
					<p class="review__name"><?php echo $author; ?></p>
					<p class="review__date"><?php echo get_the_date();?></p>
				</div>
			</div>
			<div class="review__text">
				<p class="review__title"><?php the_title(); ?></p>
				<p class="review__short"><?php echo $short_description; ?>... </p>
			</div>
		</div>
		<div class="review__icon">
			<i class="review__icon-item fa fa-star" aria-hidden="true"></i>
			<i class="review__icon-item fa fa-star" aria-hidden="true"></i>
			<i class="review__icon-item fa fa-star" aria-hidden="true"></i>
			<i class="review__icon-item fa fa-star" aria-hidden="true"></i>
			<i class="review__icon-item fa fa-star" aria-hidden="true"></i>
		</div>
	</div>
</div>