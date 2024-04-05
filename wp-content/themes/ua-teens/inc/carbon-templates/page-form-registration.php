<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_team_form_page');

	function ua_teens_team_form_page(){

		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-registration-form.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_team_form_page_main_title'.ua_teens_lang_prefix(), 'Заголовок на головному екрані'),
		         ));

		Container::make( 'post_meta', __('Форма') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-registration-form.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_team_form_page_form_title'.ua_teens_lang_prefix(), 'Заголовок форми'),
			         Field::make( 'text', 'ua_teens_team_form_page_form_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок форми'),
		         ));

		Container::make( 'post_meta', __('Корнтент сторінки') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-registration-form.php' );
		         } )

		         ->add_fields( array(
			         Field::make_rich_text( 'ua_teens_team_form_page_content_text'.ua_teens_lang_prefix(), 'Великий текст'),
			         Field::make_text( 'ua_teens_team_form_page_content_title'.ua_teens_lang_prefix(), 'Заголовок переліку знайомства'),
			         Field::make_complex('ua_teens_team_form_page_content_list'.ua_teens_lang_prefix(), 'Що входить в знайомство')
			          ->add_fields(array(
			          	Field::make_text('text', 'Текст тези')
			          )),
			         Field::make_text( 'ua_teens_team_form_page_content_bottom_text'.ua_teens_lang_prefix(), 'Нижній текст'),
		         ));
	}
