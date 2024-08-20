<?php 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$short_decription = get_field('short_decription');

/* Learn
$content = get_the_content("подробнее");
$timepost = get_the_time('U');
*/


?>

<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="ce-feature-box-52 margin-bottom">
		<a href="<?php the_permalink();?>">
			<div class="ce-post-img"> 
				<div class="info-badge"><span class="icon-pencil icon"></span>Новости</div>
				<div class="overlay"><i class="fa fa-plus" aria-hidden="true"></i> </div>
				<img src="<?php echo the_post_thumbnail_url();?>" alt="<?php echo $alt;?>" class="img-responsive" /> 
			</div>
			<div class="text-box">
				<div class="less-mar-1 title">
					<span><?php the_title(); ?></span></div>
				<p><?php echo $short_decription ?></p>
				<div class="date-info-box">
					<div class="box-left">
						<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
						<?php echo get_the_date('Y.m.d'); ?>
					</div>

				</div>
			</div>
		</a>
	</div>
</div>


