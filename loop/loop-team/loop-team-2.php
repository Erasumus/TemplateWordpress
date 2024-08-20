<?php 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$position = get_field('position');
?>

<a class="team-member-2__link" href="<?php the_permalink();?>">
					<div class="team-member-2">
						<div class="team-member-2__wrapper-img" href="#">
							<img class="team-member-2__image" src="<?php echo the_post_thumbnail_url();?>"  alt="<?php echo $alt;?>">
						</div>
						<img class="team-member-2__background" src="/wp-content/uploads/2021/09/cropped-Rectangle-19.jpg">
						<div class="team-member-2__info">
							<p class="team-member-2__name"><?php the_title(); ?></p>
							<p class="team-member-2__skill"><?php echo $position; ?></p>
						</div>
					</div>
				</a>