<?php 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>
<div>
	<div class="partner-slider-1__item">
		<a href="<?php the_permalink();?>">
			<img src="<?php echo the_post_thumbnail_url();?>" alt="<?php echo $alt;?>" class="img-fluid">
		</a>
	</div>
</div>