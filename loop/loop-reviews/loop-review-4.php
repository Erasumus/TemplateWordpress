<?php 
$short_description = get_field('short_description'); 
$author = get_field('review_author'); 
$author_image = get_field('review-img');
$thx_image = get_field('thx-img');

?>

<div class="review-slider-4__item">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<div class="review-4__author">
				<div class="review-4__wrapper-img img-container">
					<img class="review-4__image img-fluid" src="/wp-content/uploads/2022/03/Blagodarstvennoe-pismo-ot-Duettrevel-scaled.jpg" alt="благодарственное письмо"> 
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-9">
			<div class="review-4__text">
				<p class="review-4__title">Заголовок</p>
				<p class="review-4__short"><?php echo $short_description; ?>... </p>
			</div>
		</div>
	</div>
</div>