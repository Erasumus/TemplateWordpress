<?php get_header(); ?>
	<aside id="colorlib-hero" class="breadcrumbs">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/img_bg_6.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Ошибка <strong>404</strong></h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


<div class="colorlib-doctor">
		<div class="container">
		
	<p>Такой страницы не существует. Возможно, Вы некорректно набрали адрес страницы или перешли по неправильной ссылке на наш сайт.</p>
			<p>В любом случае не расстраивайтесь, у нас много полезной и актуальной информации. Посетите интересующий Вас раздел сайта:</p>
			<ul>
				<?php wp_list_categories('use_desc_for_title=0&title_li=0'); ?>
			</ul>

	</div>
</div>


<?php get_footer(); ?>
