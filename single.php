<?php 
/*
Template Name: single
*/
require('header.php');
?>


<?php 
$categories = get_the_category();
$category_id = $categories[0]->cat_ID; 


//вывод блоговых записей
if( $category_id == 3 )   { 
	get_template_part('blocks/breadcrumbs/bread-block-1'); 
	require 'single-blog.php';
} 


//вывод остальных записей по умолчанию
else { ?>
<?php get_template_part('blocks/comblocks/comblock'); ?>
<section class="section">
	<div class="container cx-unique-block">
		<?php while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</section>

<?php } ?>


<?php get_template_part('blocks/contact-block/contact-section-1'); ?>
<?php 
require('footer.php'); 
?>