<?php 

$short_description = get_field('short_description');
$min_price = get_field('min_price');

?>


<a href="<?php the_permalink();?>">
 <div class="service-card-3">
  <div class="service-card-3__image">
   <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="картинка услуги">
  </div>
  <div class="service-card-3__content">
   <div class="service-card-3__title">
    <?php the_title(); ?>
   </div>
   <div class="service-card-3__description">
    <?php echo $short_description; ?>
   </div>
   <div class="service-card-3__info">
    <div href="service-card-3__link">Подробнее</div>
    <div class="service-card-3__price">
     от <?php echo $min_price; ?>
    </div>
   </div>
  </div>
 </div>
</a>