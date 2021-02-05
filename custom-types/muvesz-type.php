<?php

add_action( 'init', 'muvesz' );
function muvesz() {
	$labels = array(
		"name" => __( 'Művészek', '' ),
		"singular_name" => __( 'Művész', '' ),
		"menu_name" => __( 'Művészek', '' ),
		"all_items" => __( 'Művészek', '' ),
		"add_new" => __( 'Új művész', '' ),
		"add_new_item" => __( 'Új művész hozzáadása', '' ),
		"edit_item" => __( 'Művész szerkesztése', '' ),
		"new_item" => __( 'Új művész', '' ),
		"view_item" => __( 'Művész megtekintése', '' ),
		"search_items" => __( 'Művész keresése', '' ),
		"not_found" => __( 'Nem található', '' ),
		"not_found_in_trash" => __( 'Nincsen a lomtárban', '' ),
		"parent_item_colon" => __( 'Szülő elem', '' ),
		"featured_image" => __( 'Kiemelt kép', '' ),
		"set_featured_image" => __( 'Kiemelt kép beállítása', '' ),
		"remove_featured_image" => __( 'Kiemelt kép eltávolítása', '' ),
		"use_featured_image" => __( 'Kiemelt kép használata', '' ),
		"archives" => __( 'Művészek', '' ),
		"insert_into_item" => __( 'Beillesztés bejegyzésbe', '' ),
		"uploaded_to_this_item" => __( 'Felöltés ide', '' ),
		"filter_items_list" => __( 'Lista szűrése', '' ),
		"items_list_navigation" => __( 'Navigáció', '' ),
		"items_list" => __( 'Művészek listája', '' ),
		"parent_item_colon" => __( 'Szülő elem', '' ),
		);

	$args = array(
		"label" => __( 'Művészek', '' ),
		"labels" => $labels,
		"description" => "Az MKISZ művészei",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_menu_string" => "Művészek",
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "muvesz", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,"%szakosztaly%" => "dashicons-admin-customizer",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions" ),		
		"taxonomies" => array( "muvesz" ),
			);
	register_post_type( "muvesz", $args );

// End of muvesz()
}

/*
// Add kategory (szakosztaly) slug to content type urls

function muvesz_post_link( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'course' );
        if( $terms ){
            return str_replace( '/%szakosztaly%/' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'muvesz_post_link', 1, 3 );*/

?>
