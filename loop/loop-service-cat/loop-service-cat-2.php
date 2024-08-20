 <?php 
$id = $category->cat_ID;
$image = get_field('category_image', 'category_'.$id);
$short_description = get_field('short_description', 'category_'.$id);
?>
 
 
 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <a class="service-card-2" href="<?php echo get_category_link( $category->term_id );?>">
          <div class="service-card-2__image">
            <img class="img-fluid" src="<?php echo $image; ?>"
              alt="<?php echo $category->name; ?>">
          </div>
          <div class="service-card-2__content">
            <p class="service-card-2__text"> <?php echo $category->name; ?></p>
            <p class="service-card-2__description"> <?php echo $short_description; ?></p>
          </div>
        </a>
      </div>