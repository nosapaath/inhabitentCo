<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function product_taxonomy() {

	$labels = array(
		'name'                       => _x( 'shops', 'Taxonomy General Name', 'inhabitent' ),
		'singular_name'              => _x( 'shop', 'Taxonomy Singular Name', 'inhabitent' ),
		'menu_name'                  => __( 'Product Type', 'inhabitent' ),
		'all_items'                  => __( 'All Items', 'inhabitent' ),
		'parent_item'                => __( 'Parent Item', 'inhabitent' ),
		'parent_item_colon'          => __( 'Parent Item:', 'inhabitent' ),
		'new_item_name'              => __( 'New Item Name', 'inhabitent' ),
		'add_new_item'               => __( 'Add New Item', 'inhabitent' ),
		'edit_item'                  => __( 'Edit Item', 'inhabitent' ),
		'update_item'                => __( 'Update Item', 'inhabitent' ),
		'view_item'                  => __( 'View Item', 'inhabitent' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'inhabitent' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'inhabitent' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'inhabitent' ),
		'popular_items'              => __( 'Popular Items', 'inhabitent' ),
		'search_items'               => __( 'Search Items', 'inhabitent' ),
		'not_found'                  => __( 'Not Found', 'inhabitent' ),
		'no_terms'                   => __( 'No items', 'inhabitent' ),
		'items_list'                 => __( 'Items list', 'inhabitent' ),
		'items_list_navigation'      => __( 'Items list navigation', 'inhabitent' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => true, 
    'show_in_rest'               => true,
	);
	register_taxonomy( 'shoptaxonomy', array( 'product' ), $args );

}
add_action( 'init', 'product_taxonomy', 0 );