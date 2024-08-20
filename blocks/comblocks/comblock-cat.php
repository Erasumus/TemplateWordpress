<?php
// доп поля опций
$phone_number = get_field('phone_number', 'option');



// доп поля комблока
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$catego =  get_queried_object();

$numcat = get_query_var('cat');
$comblock_title = get_field('commercial_title', 'category_'.$numcat);
$comblock_description =  get_field('commercial_description', 'category_'.$numcat);
$comblock_image = get_field('commercial_image', 'category_'.$numcat);
?>



<section class="section comblock-section section-pattern ">
	<div class="container ">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-8">
				<div class="comblock">
					<p class="comblock__title">
						<?php echo $comblock_title; ?>
					</p>
					<div class="breadcrumb">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
						}
						?>
					</div>  
					<div class="comblock__divide"></div>
					<p class="comblock__description">
						<?php echo $comblock_description; ?>
					</p>
					<div class="comblock__wrapper-link">
						<a class="comblock__button button" href="#modal">Консультация</a><a class="comblock__number" href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-offset-1 col-lg-3">
				<div class="content__wrapper-img">
					<img class="content__image" src="<?php echo $comblock_image; ?>" alt="<?php echo $comblock_title; ?>">
				</div>
			</div>

		</div>
	</div>
</section>