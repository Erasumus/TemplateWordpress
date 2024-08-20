<?php 
$short_description = get_field('short_description'); 
$author = get_field('review_author'); 
$author_image = get_field('review-img');
?>

<div  class="review-slider-2__item">
	<div class="review-2">
		<div class="review-2__info">
			<div class="review-2__author">
				<div class="review-2__image">
					<img class="img-fluid" src="<?php echo $author_image;?>" alt="автор"> 
				</div>
				<div class="review-2__block-name">
					<p class="review-2__name"><?php echo $author; ?></p>
					<p class="review-2__line">-</p>
					<p class="review-2__dop-name">Дополнительная информация</p>
				</div>
			</div>
			<div class="review-2__text">
				<p class="review-2__short"><?php echo $short_description; ?>... </p>
			</div>
		</div>
	</div>
</div>