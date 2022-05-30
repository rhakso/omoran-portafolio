<?php

if ( ! function_exists('event_medea_post_type') ) {
// Register Custom Post Type
function event_medea_post_type() {

	$labels = array(
		'name'                  => _x( 'Events Medea', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Events Medea', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attibutes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Event:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into event', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'text_domain' ),
		'items_list'            => __( 'Events list', 'text_domain' ),
		'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Evento Medea', 'text_domain' ),
		'description'           => __( 'Eventos ', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
		'taxonomies'            => array( 'category','post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event_medea', $args );
}
add_action( 'init', 'event_medea_post_type', 0 );
}


// Register Custom Taxonomy
function event_type_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Event Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Event Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Type', 'text_domain' ),
		'all_items'                  => __( 'TYPE', 'text_domain' ),
		'parent_item'                => __( 'Parent Event Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Event Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Type Event', 'text_domain' ),
		'add_new_item'               => __( 'Add New Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Type', 'text_domain' ),
		'update_item'                => __( 'Update Type', 'text_domain' ),
		'view_item'                  => __( 'View Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add o remove types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Types', 'text_domain' ),
		'search_items'               => __( 'Search Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'Not Types', 'text_domain' ),
		'items_list'                 => __( 'Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'event_type', array( 'event_medea' ), $args );

}
add_action( 'init', 'event_type_taxonomy', 0 );


//Custom Post Type Whisky
if ( ! function_exists('whisky_post_type') ) {
	// Register Custom Post Type
	function whisky_post_type() {
	
		$labels = array(
			'name'                  => _x( 'Whiskies Drinkit', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Whisky', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Whiskies', 'text_domain' ),
			'name_admin_bar'        => __( 'Whiskies Drinkit', 'text_domain' ),
			'archives'              => __( 'Registros Whiskies', 'text_domain' ),
			'attributes'            => __( 'Atributos Whiskies', 'text_domain' ),
			'parent_item_colon'     => __( 'Whisky Principal:', 'text_domain' ),
			'all_items'             => __( 'Todos los Whiskies', 'text_domain' ),
			'add_new_item'          => __( 'Agregar Nuevo Whisky', 'text_domain' ),
			'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo Whisky', 'text_domain' ),
			'edit_item'             => __( 'Editar Whisky', 'text_domain' ),
			'update_item'           => __( 'Actualizar Whisky', 'text_domain' ),
			'view_item'             => __( 'Ver Whisky', 'text_domain' ),
			'view_items'            => __( 'Ver Whiskies', 'text_domain' ),
			'search_items'          => __( 'Buscar Whiskies', 'text_domain' ),
			'not_found'             => __( 'No encontrado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
			'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el whisky', 'text_domain' ),
			'uploaded_to_this_item' => __( 'SUbidp a este whisky', 'text_domain' ),
			'items_list'            => __( 'Lista de Whisky', 'text_domain' ),
			'items_list_navigation' => __( 'Navegación por la lista de Whiskies', 'text_domain' ),
			'filter_items_list'     => __( 'Filtro de lista de Whiskies', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Whiskies Drinkit', 'text_domain' ),
			'description'           => __( 'Whiskies ', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
			'taxonomies'            => array( 'category','post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-portfolio',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'whisky', $args );
	}
	add_action( 'init', 'whisky_post_type', 0 );
}
	
// Register Custom Taxonomy SABOR
function sabor_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Sabores', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Sabor', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Sabor', 'text_domain' ),
		'all_items'                  => __( 'Sabor', 'text_domain' ),
		'parent_item'                => __( 'Sabor Superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Sabor Superior:', 'text_domain' ),
		'new_item_name'              => __( 'Nuevo Sabor', 'text_domain' ),
		'add_new_item'               => __( 'Agregar nuevo sabor', 'text_domain' ),
		'edit_item'                  => __( 'Editar Sabor', 'text_domain' ),
		'update_item'                => __( 'Actualizar Sabor', 'text_domain' ),
		'view_item'                  => __( 'Ver Sabor', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separatar sabores con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o remover sabores', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elija entre los sabores mas utilizados', 'text_domain' ),
		'popular_items'              => __( 'Sabores Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar Sabores', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No hay sabores', 'text_domain' ),
		'items_list'                 => __( 'Lista de sabores', 'text_domain' ),
		'items_list_navigation'      => __( 'Lista de navegacion de sabores', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'sabor', array( 'whisky' ), $args );

}
add_action( 'init', 'sabor_taxonomy', 0 );

// Register Custom Taxonomy LISTADO
function listado_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Listado', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Lista', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Lista', 'text_domain' ),
		'all_items'                  => __( 'Lista', 'text_domain' ),
		'parent_item'                => __( 'Lista Superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Lista Superior:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva Lista', 'text_domain' ),
		'add_new_item'               => __( 'Agregar nueva Lista', 'text_domain' ),
		'edit_item'                  => __( 'Editar Lista', 'text_domain' ),
		'update_item'                => __( 'Actualizar Lista', 'text_domain' ),
		'view_item'                  => __( 'Ver Lista', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separatar listas con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o remover listas', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elija entre las listas mas utilizadas', 'text_domain' ),
		'popular_items'              => __( 'Listas Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar Listas', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No hay listas', 'text_domain' ),
		'items_list'                 => __( 'Listado de Listas', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegacion de listas', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'listado', array( 'whisky' ), $args );

}
add_action( 'init', 'listado_taxonomy', 0 );
?>