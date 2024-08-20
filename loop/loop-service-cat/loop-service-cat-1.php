<?php 
$id = $category->cat_ID;
$image = get_field('category_image', 'category_'.$id);
// $short_description = get_field('short_description', 'category_'.$id);
?>

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
<a class="service-card-1" href="<?php echo get_category_link( $category->term_id );?>">
          <div class="service-card-1__img">
            <img class="img-fluid" src="<?php echo $image; ?>"
              alt=" <?php echo $category->name; ?>">
          </div>
          <div class="service-card-1__content">
            <div class="service-card-1__title">
             <?php echo $category->name; ?>
            </div>
<!--             <div class="content__text">
                <?php echo $short_description; ?>
            </div> -->
          </div>
        </a>
         </div>