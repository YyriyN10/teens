<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	
	/**
	 * Register a programs post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since ua_teens 1.0
	 */

	function programs_post_type() {

		$labels = array(
			'name'               => _x( 'Програми', 'post type general name', 'ua_teens' ),
			'singular_name'      => _x( 'Програма', 'post type singular name', 'ua_teens' ),
			'menu_name'          => _x( 'Програми', 'admin menu', 'ua_teens' ),
			'name_admin_bar'     => _x( 'Програми', 'add new on admin bar', 'ua_teens' ),
			'add_new'            => _x( 'Додати нову', 'actions', 'ua_teens' ),
			'add_new_item'       => __( 'Додати нову програму', 'ua_teens' ),
			'new_item'           => __( 'Нова програма', 'ua_teens' ),
			'edit_item'          => __( 'Редагувати програму', 'ua_teens' ),
			'view_item'          => __( 'Дивитись програму', 'ua_teens' ),
			'all_items'          => __( 'Всі програми', 'ua_teens' ),
			'search_items'       => __( 'Шукати програму', 'ua_teens' ),
			'parent_item_colon'  => __( 'Батько програми:', 'ua_teens' ),
			'not_found'          => __( 'Програму не знайдено', 'ua_teens' ),
			'not_found_in_trash' => __( 'У кошику програму не знайдно', 'ua_teens' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'programs' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'programs' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'supports'           => array( 'title', 'thumbnail', 'editor',)
		);

		register_post_type( 'programs', $args );
	}

	add_action( 'init', 'programs_post_type' );

	/**
	 * Register a students' works post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since ua_teens 1.0
	 */

	function student_works_post_type() {

		$labels = array(
			'name'               => _x( 'Робота', 'post type general name', 'ua_teens' ),
			'singular_name'      => _x( 'Робота', 'post type singular name', 'ua_teens' ),
			'menu_name'          => _x( 'Роботи студентів', 'admin menu', 'ua_teens' ),
			'name_admin_bar'     => _x( 'Роботи студентів', 'add new on admin bar', 'ua_teens' ),
			'add_new'            => _x( 'Додати нову', 'actions', 'ua_teens' ),
			'add_new_item'       => __( 'Додати нову роботу', 'ua_teens' ),
			'new_item'           => __( 'Нова робота', 'ua_teens' ),
			'edit_item'          => __( 'Редагувати роботу', 'ua_teens' ),
			'view_item'          => __( 'Дивитись роботу', 'ua_teens' ),
			'all_items'          => __( 'Всі роботи', 'ua_teens' ),
			'search_items'       => __( 'Шукати роботу', 'ua_teens' ),
			'parent_item_colon'  => __( 'Батько роботии:', 'ua_teens' ),
			'not_found'          => __( 'Роботу не знайдено', 'ua_teens' ),
			'not_found_in_trash' => __( 'У кошику роботу не знайдно', 'ua_teens' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['student_works-tax'],
			'description'        => __( 'Description.', 'student_works' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'student_works' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 6,
			'menu_icon'          => 'dashicons-hammer',
			'supports'           => array( 'title', 'thumbnail', 'editor',)
		);

		register_post_type( 'student_works', $args );
	}

	add_action( 'init', 'student_works_post_type' );

	add_action( 'init', 'student_works_taxonomy' );
	function student_works_taxonomy(){

		register_taxonomy('student_works-tax', 'student_works', array(
			'label'                 => 'student_works-tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Програми робіт',
				'singular_name'     => 'Програми',
				'search_items'      => 'Пошук прорам',
				'all_items'         => 'Всі програми',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати програму',
				'update_item'       => 'Оновии програму',
				'add_new_item'      => 'Додати нову програму',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Програми робіт',
			),
			'description'           => 'student_works-tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail', 'revisions' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'student_works'),
			'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}

	/**
	 * Register a team post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since ua_teens 1.0
	 */

	function team_post_type() {

		$labels = array(
			'name'               => _x( 'Команда', 'post type general name', 'ua_teens' ),
			'singular_name'      => _x( 'Команда', 'post type singular name', 'ua_teens' ),
			'menu_name'          => _x( 'Команда', 'admin menu', 'ua_teens' ),
			'name_admin_bar'     => _x( 'Команда', 'add new on admin bar', 'ua_teens' ),
			'add_new'            => _x( 'Додати нового', 'actions', 'ua_teens' ),
			'add_new_item'       => __( 'Додати нового робітника', 'ua_teens' ),
			'new_item'           => __( 'Новий робітник', 'ua_teens' ),
			'edit_item'          => __( 'Редагувати робітника', 'ua_teens' ),
			'view_item'          => __( 'Дивитись робітника', 'ua_teens' ),
			'all_items'          => __( 'Всі робітники', 'ua_teens' ),
			'search_items'       => __( 'Шукати робітника', 'ua_teens' ),
			'parent_item_colon'  => __( 'Батько робітника:', 'ua_teens' ),
			'not_found'          => __( 'Робітникна не знайдено', 'ua_teens' ),
			'not_found_in_trash' => __( 'У кошику робітника не знайдно', 'ua_teens' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['team-tax'],
			'description'        => __( 'Description.', 'team' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'team' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 7,
			'menu_icon'          => 'dashicons-groups',
			'supports'           => array( 'title', 'thumbnail', 'editor',)
		);

		register_post_type( 'team', $args );
	}

	add_action( 'init', 'team_post_type' );

	add_action( 'init', 'team_taxonomy' );
	function team_taxonomy(){

		register_taxonomy('team-tax', 'team', array(
			'label'                 => 'team-tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Напрямки працівників',
				'singular_name'     => 'Напрямки',
				'search_items'      => 'Пошук напрямку',
				'all_items'         => 'Всі напрямки',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати напрямок',
				'update_item'       => 'Оновити напрямок',
				'add_new_item'      => 'Додати новий напрямок',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Напрямки працівників',
			),
			'description'           => 'team-tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail', 'revisions' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'steam'),
			'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}

	/**
	 * Register a F.A.Q post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since ua_teens 1.0
	 */

	function faq_post_type() {

		$labels = array(
			'name'               => _x( 'F.A.Q', 'post type general name', 'ua_teens' ),
			'singular_name'      => _x( 'F.A.Q', 'post type singular name', 'ua_teens' ),
			'menu_name'          => _x( 'F.A.Q', 'admin menu', 'ua_teens' ),
			'name_admin_bar'     => _x( 'F.A.Q', 'add new on admin bar', 'ua_teens' ),
			'add_new'            => _x( 'Додати нове', 'actions', 'ua_teens' ),
			'add_new_item'       => __( 'Додати нове питання', 'ua_teens' ),
			'new_item'           => __( 'Новие питання', 'ua_teens' ),
			'edit_item'          => __( 'Редагувати питання', 'ua_teens' ),
			'view_item'          => __( 'Дивитись питання', 'ua_teens' ),
			'all_items'          => __( 'Всі питання', 'ua_teens' ),
			'search_items'       => __( 'Шукати питання', 'ua_teens' ),
			'parent_item_colon'  => __( 'Батько питання:', 'ua_teens' ),
			'not_found'          => __( 'Питання не знайдено', 'ua_teens' ),
			'not_found_in_trash' => __( 'У кошику питання не знайдно', 'ua_teens' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'faq' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'faq' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 8,
			'menu_icon'          => 'dashicons-list-view',
			'supports'           => array( 'title', 'thumbnail', 'editor',)
		);

		register_post_type( 'faq', $args );
	}

	add_action( 'init', 'faq_post_type' );

	/**
	 * Register a blog post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since ua_teens 1.0
	 */

	function blog_post_type() {

		$labels = array(
			'name'               => _x( 'Блог', 'post type general name', 'ua_teens' ),
			'singular_name'      => _x( 'Блог', 'post type singular name', 'ua_teens' ),
			'menu_name'          => _x( 'Блог', 'admin menu', 'ua_teens' ),
			'name_admin_bar'     => _x( 'Блог', 'add new on admin bar', 'ua_teens' ),
			'add_new'            => _x( 'Додати нову', 'actions', 'ua_teens' ),
			'add_new_item'       => __( 'Додати нову статтю', 'ua_teens' ),
			'new_item'           => __( 'Нова стаття', 'ua_teens' ),
			'edit_item'          => __( 'Редагувати статтю', 'ua_teens' ),
			'view_item'          => __( 'Дивитись статтю', 'ua_teens' ),
			'all_items'          => __( 'Всі статті', 'ua_teens' ),
			'search_items'       => __( 'Шукати статтю', 'ua_teens' ),
			'parent_item_colon'  => __( 'Батько статті:', 'ua_teens' ),
			'not_found'          => __( 'Статтю не знайдено', 'ua_teens' ),
			'not_found_in_trash' => __( 'У кошику статтей не знайдно', 'ua_teens' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'blog' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'blog' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 9,
			'menu_icon'          => 'dashicons-excerpt-view',
			'supports'           => array( 'title', 'thumbnail', 'editor',)
		);

		register_post_type( 'blog', $args );
	}

	add_action( 'init', 'blog_post_type' );