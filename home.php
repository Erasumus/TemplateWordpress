<?php 
/*
Template Name: main
*/

 //
require('header.php'); //шапка выводит станартное меню вордпрес

if(is_front_page()) {
	require('custom.php');
	}
else if(FALSE) { //категория
	
	echo '<h1>Главная</h1>';
}``
else if(FALSE) {//страница
	
	echo '<h1>Главная</h1>';
}



require('footer.php'); ?>