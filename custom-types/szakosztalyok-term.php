<?php

add_action( 'init', 'szakosztaly' );
function szakosztaly() {
	$labels = array(
		"name" => __( 'Szakosztályok', 'activello' ),
		"singular_name" => __( 'Szakosztály', 'activello' ),
		);

	$args = array(
		"label" => __( 'Szakosztályok', 'activello' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Szakosztályok",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'szakosztaly', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "szakosztaly", array( "muvesz" ), $args );

// End cptui_register_my_taxes_szakosztaly()
}


// ABC sorrendbe teszi a szakosztályokat
function szakosztalyindex_queries( $query ) {
	if ( ! is_admin() && ( is_post_type_archive( 'muvesz' ) || is_tax( 'szakosztaly' ) ) && $query->is_main_query() ) {
		$query->set('orderby', 'name');
		$query->set('order', 'ASC');
	}
}
add_action( 'pre_get_posts', 'szakosztalyindex_queries' );

?>