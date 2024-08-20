<?php 
$id = $category->cat_ID;
$image = get_field('category_image', 'category_'.$id);
$short_description = get_field('short_description', 'category_'.$id);
$min_price = get_field('min_price', 'category_'.$id);
?>


<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
<a href="<?php echo get_category_link( $category->term_id );?>">
 <div class="service-card-3">
  <div class="service-card-3__image">
   <img class="img-fluid" src="<?php echo $image; ?>" alt="картинка услуги">
  </div>
  <div class="service-card-3__content">
   <div class="service-card-3__title">
    <?php echo $category->name; ?>
   </div>
   <div class="service-card-3__description">
    <?php echo $short_description; ?>
   </div>
   <div class="service-card-3__info">
    <div href="service-card-3__link">Подробнее</div>
    
   </div>
  </div>
 </div>
</a>
 </div>