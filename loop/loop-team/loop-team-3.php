<?php 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$position = get_field('position');
$short_description = get_field('short_description');
?>


<div class="team-member-3">
					<img class="team-member-3__image img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="<?php echo $alt;?>">
					<div class="team-member-3__details">
						<span class="team-member-3__skill"><?php echo $position; ?></span>
						<p class="team-member-3__name"><?php the_title(); ?></p>
						<p class="team-member-3__description"><?php echo $short_description; ?></p>
					</div>
				</div>