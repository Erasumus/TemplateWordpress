<section class="breadcrumbs-section">
	<div class="container">
		<h1><?php echo single_cat_title(); ?></h1>
		<div class="breadcrumb">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
			}
			?>
		</div>  
	</div>
</section>


