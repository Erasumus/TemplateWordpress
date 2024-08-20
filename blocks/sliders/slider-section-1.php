<!--  slider-section-1  -->

<?php 
$banners = get_field('banner', 'option'); 
?>

<section class="slider-section">
    <div class="slider main-slider">
        <?php foreach($banners as $banner) { ?>
        <div class="container">
            <div class="slide" style="background:url('<?php echo $banner['image_link']; ?>'); width: 100%; height: 400px;">
                <div class="slide__text">
                    <p class="title"><?php echo $banner['banner_title']; ?></p>
                    <p class="text"><?php echo $banner['banner_content']; ?></p>
                    <div class="main-slide__buttons">
                        <a class="button button-style-1" href="<?php echo $banner['banner_link']; ?>">Подробнее</a>
                        <a class="button button-style-2" href="#modal">8 800 323 23 15</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>