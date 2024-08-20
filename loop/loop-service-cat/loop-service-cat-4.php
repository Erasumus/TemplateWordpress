<?php 
$id = $category->cat_ID;
$image = get_field('category_image', 'category_'.$id);

?>

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
	<div class="service-card-4">
		<div class="service-card-4__wrapper-img">
			<a href="<?php echo get_category_link( $category->term_id );?>" class="service-card-4__image" style="background-image: url(<?php echo $image; ?>);"></a>
		</div>
		<div class="service-card-4__info">
			<a href="<?php echo get_category_link( $category->term_id );?>" class="service-card-4__title"><?php echo $category->name; ?></a>
			<ul class="service-card-4__ul">
				<?php  foreach($posts as $post) { ?>
					<li class="service-card-4__li"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>		
</div>