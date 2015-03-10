<?php
/*

// {post-type} post type ================================ /
add_action('init', 'register_{post-type}');

function register_{post-type}() {

	$labels = array (
		'name' => '{post-type}',
		'singular_name' => '{post-type}',
		'menu_name' => '{post-type}',
		'name_admin_bar' => '{post-type}',
		'add_new' => 'Add {post-type}',
		'add_new_item' => 'Add New {post-type}',
		'edit' => 'Edit',
		'edit_item' => 'Edit {post-type}',
		'new_item' => 'New {post-type}',
		'all_items' => 'All {post-type}',
		'view' => 'View {post-type}',
		'view_item' => 'View {post-type}',
		'search_items' => 'Search {post-type}',
		'not_found' => 'No {post-type} Found',
		'not_found_in_trash' => 'No {post-type} Found in Trash',
		'parent' => 'Parent {post-type}',
	);

	register_post_type('{post-type}', array(
			'label' => '{post-type}',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => '{post-type}', 'with_front' => true),
			'query_var' => true,
			'menu_position' => '0',
			'supports' => array('title','editor','thumbnail'),
			'labels' => $labels
		)
	);
}

// Custom Admin Columns (optional) ======= /

function my_{post-type}_columns($columns) {
	$columns = array(
		'cb'	 	=> '<input type="checkbox" />',
		'title' 	=> 'Title',
    'taxonomy' => 'Taxonomy',
    'processes' => 'Processes',
		'date'		=>	'Date',
	);
	return $columns;
}
function my_custom_columns($column, $post_id) {
	switch ($column) {
		case "taxonomy" :
			$terms = get_the_term_list( $post_id , 'taxonomy' , '' , ', ' , '' );
			if ( is_string( $terms ) )
				echo $terms;
			else
				echo '—';
			break;
	}
}
add_action("manage_{post-type}_posts_custom_column", "my_custom_columns", 10, 2);
add_filter("manage_edit-{post-type}_columns", "my_{post-type}_columns");

*/

?>
