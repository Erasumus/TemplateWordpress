<!--  slider-section-2  -->

<?php 
$banners = get_field('banner_gradient', 'option'); 
?>

<section class="section slider-section-2">
 <div class="slider main-slider-2">
  <?php foreach($banners as $banner) { ?>
  <div class="container" style="<?php echo $banner['banner_colors']; ?> ">
   <div class="row ">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 middle-xs">
     <div class="slider__content">
      <p class="title"><?php echo $banner['banner_title']; ?></p>
      <p class="text"><?php echo $banner['banner_content']; ?></p>
      <div class="main-slide__buttons">
       <a class="button button-style-1" href="<?php echo $banner['banner_link']; ?>">Подробнее</a>
       <a class="button button-style-2" href="#modal">8 800 323 23 15</a>
      </div>
     </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
     <div class="slider__img">
      <img class="img-fluid" src="<?php echo $banner['image_link']; ?>" alt="<?php echo $banner['image_alt']; ?>">
     </div>
    </div>
   </div>
  </div>
  <?php }  ?>
 </div>
</section>