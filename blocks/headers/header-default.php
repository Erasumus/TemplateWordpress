<?php 
$is_shop = get_field('is_shop', 'option');
$logo = get_field('logo_header', 'option');
$site_title = get_field('site_title', 'option');
$phone_number = get_field('phone_number', 'option');
$socials = get_field('socials', 'option');

?>


<header>
	<div class="topline">
		<div class="container ">
			<div class="topline__wrapper">
				<ul class="topline__info ">
					<li class="topline__info-item">круглосуточно</li>
					<li class="topline__info-item"><a href="<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></li>
				</ul>
				<!--end left-->
				<ul class="topline__socials list-socials">
					<?php foreach($socials as $social) {  ?>
					<li class="list-socials__item">
						<a href="<?php echo $social["social_link"]; ?>"><i
																		   class="fab fa-<?php echo $social["social_icons"][0]["value"]; ?>"></i>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<nav class="navbar">
		<div class="container navbar-container">
			<a class="navbar__logo logo" href="/">
				<img src="<?php echo $logo; ?>" alt="<?php echo $site_title; ?>">
			</a>
			<input id="menu-toggle" type="checkbox" />
			<div class="navbar__menu navbar-menu ">

				<!-- контейнер лого в боковом меню -->
				<div class="container mobile ">
					<a class="navbar__logo logo" href="/">
						<img src="<?php echo $logo; ?>" alt="<?php echo $site_title; ?>">
					</a>
				</div>

				<!-- контейнер лого в боковом меню -->

				<ul class="navbar-menu__list">
					<li class="navbar-menu__item">
						<a class="navbar-menu__link" href="/">Main</a>
					</li>
					<li class="navbar-menu__item ">
						<a class="navbar-menu__link" href="/services/"><span>Services</span><i class="fa fa-solid fa-angle-down"></i></a>
					</li>
					<li class="navbar-menu__item ">
						<a class="navbar-menu__link" href="/about/"><span>About</span><i class="fa fa-solid fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu__item">
								<a class="dropdown-menu__item-link" href="/reviews/">
									<span>Reviews</span>
									<i class="fa fa-solid fa-angle-right"></i>
								</a>
							</li>
							<li class="dropdown-menu__item">
								<a class="dropdown-menu__item-link" href="/team/">
									<span>Team</span>
									<i class="fa fa-solid fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</li>
					<li class="navbar-menu__item">
						<a class="navbar-menu__link" href="/blog/">Blog</a>
					</li>
					<li class="navbar-menu__item">
						<a class="navbar-menu__link" href="/contacts/">Contacts</a>
					</li>
				</ul>

				<!-- контейнер для информации на мобилке -->

				<div class="container mobile ">
					<div>
						<a href="<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
					</div>

					<!-- ДОДЕЛАТЬ -->
					<br>
					<!-- ДОДЕЛАТЬ -->


					<div class="list-socials">
						<?php foreach($socials as $social) {  ?>
						<li class="list-socials__item">
							<a href="<?php echo $social["social_link"]; ?>"><i
																			   class="fab fa-<?php echo $social["social_icons"][0]["value"]; ?>"></i>
							</a>
						</li>
						<?php } ?>
					</div>
				</div>
				<!-- контейнер для информации на мобилке -->
			</div>


			<?php if( $is_shop ) { ?>
			<div class="cart-header cart-parent">
				<a href="/cart">
					<i class="fa fa-shopping-cart"></i>
					<span class="number"> 4 </span>
				</a>
			</div>
			<?php } ?>



			<a class="navbar__button button button-style-1 " href="#">
				<span class="navbar__button-text">Кнопка</span>
				<i class="fa fa-phone"></i>
			</a>

			<label class="button-menu button--mobile" for="menu-toggle">
				<span class="button-menu__line"></span>
			</label>

		</div>

	</nav>

</header>