<?php
add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes() {
	$labels = array(
		"name" => __( 'Szakosztályok', '' ),
		"singular_name" => __( 'Szakosztály', '' ),
		"menu_name" => __( 'Szakosztályok', '' ),
		"all_items" => __( 'Összes szekosztály', '' ),
		"edit_item" => __( 'Szakosztály szerkesztése', '' ),
		"view_item" => __( 'Megtekintés', '' ),
		"update_item" => __( 'Frissítés', '' ),
		"add_new_item" => __( 'Új szakosztály', '' ),
		"new_item_name" => __( 'Új szakosztály neve', '' ),
		"parent_item" => __( 'Szülő elem', '' ),
		"search_items" => __( 'Keresés', '' ),
		"popular_items" => __( 'Szakosztályok', '' ),
		"add_or_remove_items" => __( 'Szakosztály törlése', '' ),
		"not_found" => __( 'nem található', '' ),
		);

	$args = array(
		"label" => __( 'Szakosztályok', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Szakosztályok",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => false,
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "muvesz", array( "muvesz" ), $args );

// End cptui_register_my_taxes()
}

add_action( 'init', 'cptui_register_my_taxes_muvesz' );
function cptui_register_my_taxes_muvesz() {
	$labels = array(
		"name" => __( 'Szakosztályok', '' ),
		"singular_name" => __( 'Szakosztály', '' ),
		"menu_name" => __( 'Szakosztályok', '' ),
		"all_items" => __( 'Összes szekosztály', '' ),
		"edit_item" => __( 'Szakosztály szerkesztése', '' ),
		"view_item" => __( 'Megtekintés', '' ),
		"update_item" => __( 'Frissítés', '' ),
		"add_new_item" => __( 'Új szakosztály', '' ),
		"new_item_name" => __( 'Új szakosztály neve', '' ),
		"parent_item" => __( 'Szülő elem', '' ),
		"search_items" => __( 'Keresés', '' ),
		"popular_items" => __( 'Szakosztályok', '' ),
		"add_or_remove_items" => __( 'Szakosztály törlése', '' ),
		"not_found" => __( 'nem található', '' ),
		);

	$args = array(
		"label" => __( 'Szakosztályok', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Szakosztályok",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => false,
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "muvesz", array( "muvesz" ), $args );

// End cptui_register_my_taxes_muvesz()
}

?>
