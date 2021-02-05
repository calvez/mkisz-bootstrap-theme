<?php
function mkisz_order() {

	/**
	 * Taxonomy: Elhelyezés.
	 */

	$labels = array(
		"name" => __( 'Elhelyezés', 'activello' ),
		"singular_name" => __( 'Elhelyezés', 'activello' ),
	);

	$args = array(
		"label" => __( 'Elhelyezés', 'activello' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Elhelyezés",
		"show_ui" => true,
		"show_in_menu" => false,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'mkisz_order', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "mkisz_order", array( "post" ), $args );
}

add_action( 'init', 'mkisz_order' );

 ?>