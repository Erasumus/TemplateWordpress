<?php 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
// $short_description = get_field('short_description');
?>

<a class="service-card-1" href="<?php the_permalink();?>">
 <div class="service-card-1__img">
  <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
 </div>
 <div class="service-card-1__content">
  <div class="service-card-1__title">
   <?php the_title(); ?>
  </div>
<!--   <div class="content__text">
   <?php echo $short_description; ?>
  </div> -->
 </div>
</a>