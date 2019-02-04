<?php

// my function: registered new type data
function films_library_init() {
	    $args = array(
	      'label' => 'Фильмы',
	        'public' => true,
			'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'films'),
	        'query_var' => true,
			'menu_position' => 9,
	        'menu_icon' => 'dashicons-video-alt',
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
	    register_post_type( 'cinema', $args );
	}
	add_action( 'init', 'films_library_init' );

// 	function create_posttype() {
//   register_post_type( 'acme_product',
//     array(
//       'labels' => array(
//         'name' => __( 'Продукты' ),
//         'singular_name' => __( 'Продукт' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'rewrite' => array('slug' => 'products'),
//     )
//   );
// }
// add_action( 'init', 'create_posttype' );


add_action('init', 'create_taxonomy');
function create_taxonomy(){
	register_taxonomy('taxonomy', array('cinema'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Жанры',
			'singular_name'     => 'Жанр',
			'search_items'      => 'Поиск по жанру',
			'all_items'         => 'Все жанры',
			'view_item '        => 'Показать жанр',
			'parent_item'       => 'Фильмы',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать жанр',
			'update_item'       => 'Обновление жанра',
			'add_new_item'      => 'Добавить новый жанр',
			'new_item_name'     => 'Новое имя жанра',
			'menu_name'         => 'Жанры',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box,
		'show_admin_column'     => false,
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}


add_action( 'init', 'create_cinema_taxonomies');
function create_cinema_taxonomies(){
	register_taxonomy('countries', array('cinema'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Страны',
			'singular_name'     => 'Страна',
			'search_items'      => 'Поиск по стране',
			'all_items'         => 'Все страны',
			'view_item '        => 'Показать страну',
			'parent_item'       => 'Фильмы',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать страну',
			'update_item'       => '',
			'add_new_item'      => 'Добавить страну',
			'new_item_name'     => '',
			'menu_name'         => 'Страны',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box,
		'show_admin_column'     => false,
		'_builtin'              => false,
		'show_in_quick_edit'    => null, 
		) );
		register_taxonomy('year', array('cinema'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Годы',
			'singular_name'     => 'Год',
			'search_items'      => 'Поиск по дате выхода',
			'all_items'         => 'Все года',
			'view_item '        => 'Показать год',
			'parent_item'       => 'Фильмы',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать год выхода',
			'update_item'       => '',
			'add_new_item'      => 'Добавить год',
			'new_item_name'     => '',
			'menu_name'         => 'Годы',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box,
		'show_admin_column'     => false,
		'_builtin'              => false,
		'show_in_quick_edit'    => null, 
		) );
		register_taxonomy('actors', array('cinema'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Актеры',
			'singular_name'     => 'Актер',
			'search_items'      => 'Поиск по актерам',
			'all_items'         => '',
			'view_item '        => 'Показать актера',
			'parent_item'       => 'Фильмы',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать актера',
			'update_item'       => '',
			'add_new_item'      => 'Добавить актера',
			'new_item_name'     => '',
			'menu_name'         => 'Актеры',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => post_categories_meta_box,
		'show_admin_column'     => false,
		'_builtin'              => false,
		'show_in_quick_edit'    => null, 
		) );
}

