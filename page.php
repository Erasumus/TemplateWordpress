<?php 
require('header.php');
?>

 <?php get_template_part('blocks/breadcrumbs/bread-block-1'); ?>

<?php get_template_part('blocks/about/about-section-1'); ?>

<section class="section cx-unique-block">
	<div class="container">
		<?php while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</section>

<?php get_template_part('blocks/team/team-section-1'); ?>
<?php get_template_part('blocks/contact-block/contact-section-1'); ?>




<?php 
require('footer.php'); 
?>