<?php 
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'tools', [
		'label'  => null,
		'labels' => [
			'name'               => __('Инструменты', 'lbrtx'),
			'singular_name'      => __('Инструмент', 'lbrtx'),
			'add_new'            => __('Добавить Инструмент', 'lbrtx'),
			'add_new_item'       => __('Добавление Инструментa', 'lbrtx'),
			'edit_item'          => __('Редактирование Инструментa', 'lbrtx'),
			'new_item'           => __('Новый Инструмент', 'lbrtx'),
			'view_item'          => __('Смотреть Инструмент', 'lbrtx'),
			'search_items'       => __('Искать Инструмент', 'lbrtx'),
			'not_found'          => __('Не найдено', 'lbrtx'),
			'not_found_in_trash' => __('Не найдено в корзине', 'lbrtx'),
			'menu_name'          => __('Инструменты', 'lbrtx'),
		],
		'description'            => '',
		'public'                 => true,
		'publicly_queryable'  => false,
		'show_in_menu'           => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}