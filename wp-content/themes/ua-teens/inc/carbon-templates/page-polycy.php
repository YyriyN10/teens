<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_policy_page');

	function ua_teens_policy_page(){

		Container::make( 'post_meta', __('Додаткові поля') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-polycy.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_policy_page_main_title'.ua_teens_lang_prefix(), 'Заголовок на головному екрані'),
			         Field::make( 'text', 'ua_teens_policy_page_main_subtitle'.ua_teens_lang_prefix(), 'Текст у дужках на головному екрані'),
			         Field::make( 'text', 'ua_teens_policy_page_main_approved'.ua_teens_lang_prefix(), 'Коли та ким затверджено'),
		         ));

	}
