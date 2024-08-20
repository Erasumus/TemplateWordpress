<?php 
$short_description = get_field('short_description');
$min_price = get_field('min_price');
?>


<a class="service-card-2" href="<?php the_permalink();?>">
          <div class="service-card-2__image">
            <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>"
              alt="картинка услуги">
          </div>
          <div class="service-card-2__content">
            <p class="service-card-2__text"><?php the_title(); ?></p>
            <p class="service-card-2__description"><?php echo $short_description; ?></p>
          </div>
        </a>