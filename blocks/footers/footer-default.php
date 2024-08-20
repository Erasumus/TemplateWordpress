<?php 
$is_shop = get_field('is_shop', 'option');
$logo = get_field('logo_footer', 'option');
$site_title = get_field('site_title', 'option');
$socials = get_field('socials', 'option');
?>

<footer class="footer">
  <div class="container">
    <div class="row middle-xs">
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
        <span class="footer__text">Хочу быть в курсе акций и новинок</span>
      </div>
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-md-offset-1">
        <form class="footer__form footer-form">
          <input type="tel" class="footer-form__input " placeholder="Мой e-mail">
          <input type="submit" class="button button-style-1" placeholder="Подписаться">
        </form>
      </div>
      <hr>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-3 col-lg-3">
        <div class="footer__info">
          <a class="footer__logo logo" href="#">
            <img src="<?php echo $logo; ?>">
          </a>
          <p class="footer__about">Небольшое описание компании, девиз или фраза, которую никто не прочитает</p>
          <div class="footer__contacts">
            <a class="footer__phone" href="#modal">+7(843)299-41-78</a>
            <a class="footer__mail" href="#modal">black@help.com</a>
          </div>
          <div class="footer__subcontacts">
            <a class="footer__button button button-style-4" href="#modal">Задать вопрос</a>
            <ul class="footer__socials list-socials">
              <?php foreach($socials as $social) {  ?>
              <li class="list-socials__item"><a href="<?php echo $social["social_link"]; ?>">
                  <i class="fab fa-<?php echo $social["social_icons"][0]["value"]; ?>"></i></a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 col-lg-2 col-md-offset-1 col-lg-offset-2">
        <ul class="footer__menu ">
          <li class="footer__menu-item">Услуги</li>
          <li class="footer__menu-item"><a href="">Продажа оборудования</a></li>
          <li class="footer__menu-item"><a href="">Ремонт</a></li>
          <li class="footer__menu-item"><a href="">Сервисный центр</a></li>
          <li class="footer__menu-item"><a href="">Подбор товаров</a></li>
          <li class="footer__menu-item"><a href="">Доставка и гарантии</a></li>
          <li class="footer__menu-item"><a href="">Партнерство</a></li>
        </ul>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-2">
        <ul class="footer__menu">
          <li class="footer__menu-item">Сервис</li>
          <li class="footer__menu-item"><a href="">Продажа оборудования</a></li>
          <li class="footer__menu-item"><a href="">Ремонт</a></li>
          <li class="footer__menu-item"><a href="">Сервисный центр</a></li>
          <li class="footer__menu-item"><a href="">Подбор товаров</a></li>
          <li class="footer__menu-item"><a href="">Доставка и гарантии</a></li>
          <li class="footer__menu-item"><a href="">Партнерство</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-2 col-lg-3">
        <ul class="footer__menu ">
          <li class="footer__menu-item">Прочее</li>
          <li class="footer__menu-item"><a href="">О компании</a></li>
          <li class="footer__menu-item"><a href="">Отзывы</a></li>
          <li class="footer__menu-item"><a href="">Наши проекты</a></li>
          <li class="footer__menu-item"><a href="">Наши партнеры</a></li>
          <li class="footer__menu-item"><a href="">Сервис</a></li>
          <li class="footer__menu-item"><a href="">Контакты</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row middle-xs">
      <div class="col-xs-3 col-md-4 col-lg-4">
        <p class="copyright-text">
          2022 Black
        </p>
      </div>
      <div class="col-xs-9 col-md-4 col-lg-4 end-xs start-md">
        <a class="copyright-link" href="#">Политика конфиденциальности</a>
      </div>
      <div class="col-xs-12 col-md-4 col-lg-4 start-xs end-md">
        <a class="copyright-link" href="#">Создание и продвижение сайтов CITYNIX</a>
      </div>
    </div>
  </div>
</footer>