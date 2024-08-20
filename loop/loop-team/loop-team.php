<?php 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$position = get_field('position');
$short_description = get_field('short_description');
?>	
 
 <a href="<?php the_permalink();?>" class="team-member-1">
					<div class="team-member-1__wrapper-img">
						<img class="team-member-1__img" src="<?php echo the_post_thumbnail_url();?>" alt="<?php echo $alt;?>">
					</div>
					<div class="team-member-1__details">
						<p class="team-member-1__name"><?php the_title(); ?></p>
						<span class="team-member-1__skill"><?php echo $position; ?></span>
						<p class="team-member-1__description"><?php echo $short_description; ?></p>
					</div>
				</a>	
  