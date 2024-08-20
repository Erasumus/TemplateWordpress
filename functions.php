<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

add_theme_support( 'post-thumbnails' ); // миниатюры для всех типов 

// add_filter('category_link', function($a){
// 	return str_replace( 'category/', '', $a );
// }, 99 );

/** woocommerce  *****************************************************************************************************************/
add_theme_support('woocommerce');

/**
 * Делаем простую и понятную структуру для урлов WooCommerce:
 *
 * Страница магазина: https://domain.com/shop
 * Страница категории:  https://domain.com/shop/category
 * Страница товара:  https://domain.com/shop/category
 *
 */

function mihdan_woocommerce_permalinks( $flash = false ) {
	$terms = get_terms(
		array(
			'taxonomy'   => 'product_cat',
			'post_type'  => 'product',
			'hide_empty' => false,
		)
	);
	if ( $terms && ! is_wp_error( $terms ) ) {
		$siteurl = esc_url( home_url( '/' ) );
		foreach ( $terms as $term ) {
			$term_slug = $term->slug;
			$baseterm  = str_replace( $siteurl, '', get_term_link( $term->term_id, 'product_cat' ) );
			add_rewrite_rule( $baseterm . '?$', 'index.php?product_cat=' . $term_slug, 'top' );
			add_rewrite_rule( $baseterm . 'page/([0-9]{1,})/?$', 'index.php?product_cat=' . $term_slug . '&paged=$matches[1]', 'top' );
			add_rewrite_rule( $baseterm . '(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?product_cat=' . $term_slug . '&feed=$matches[1]', 'top' );
		}
	}
	if ( true === $flash ) {
		flush_rewrite_rules( false );
	}
}
add_filter( 'init', 'mihdan_woocommerce_permalinks' );



function mihdan_woocommerce_permalinks_flush( $term_id, $taxonomy ) {
	if ( 'product_cat' === $taxonomy ) {
		mihdan_woocommerce_permalinks( true );
	}
}
add_action( 'create_term', 'mihdan_woocommerce_permalinks_flush', 10, 2 );

function mihdan_woocommerce_fixed_category_permalink( $url, $term, $taxonomy ) {
	if ( 'product_cat' === $taxonomy ) {
		return str_replace( 'product-category/', 'shop/', $url );
	}
	return $url;
}
add_filter( 'term_link', 'mihdan_woocommerce_fixed_category_permalink', 10, 3 );





