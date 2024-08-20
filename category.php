<?php 
require('header.php');




$numcat = get_query_var('cat');

if($numcat == 2) {
	require ('category/category-novosti.php');
}

elseif($numcat == 3) {
	require ('category/category-blog.php');
}

elseif($numcat == 4){
	require ('category/category-services.php');
}

elseif($numcat == 33){
	require ('category/category-team.php');
}

elseif($numcat == 6){
	require ('category/category-reviews.php');
}

else {
	require('category/category-subservices.php'); 
}





require('footer.php'); 
?>
