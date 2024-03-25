<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_team_men_page_fields');

	function ua_teens_team_men_page_fields(){
		Container::make( 'post_meta', __('Main screen') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_team_men_main_direction'.ua_teens_lang_prefix(), 'Позиція у напрямку'),
			         Field::make( 'text', 'ua_teens_team_men_main_position'.ua_teens_lang_prefix(), 'Спеціалізація'),
		         ));

		Container::make( 'post_meta', __('Освіта') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_team_men_education_university'.ua_teens_lang_prefix(), 'Місце навчання'),
			         Field::make_image('ua_teens_team_men_education_mein_pic'.ua_teens_lang_prefix(), 'Головне зображення блоку')
			            ->set_value_type('url'),
			         Field::make_rich_text('ua_teens_team_men_education_text'.ua_teens_lang_prefix(), 'Текс блоку'),
			         Field::make_image('ua_teens_team_men_education_left_pic'.ua_teens_lang_prefix(), 'Зображення ліворуч')
			              ->set_value_type('url'),
			         Field::make_image('ua_teens_team_men_education_center_pic'.ua_teens_lang_prefix(), 'Зображення по центру')
			              ->set_value_type('url'),
			         Field::make_image('ua_teens_team_men_education_right_pic'.ua_teens_lang_prefix(), 'Зображення праворуч')
			              ->set_value_type('url'),
		         ));

		Container::make( 'post_meta', __('Блок з цетатою') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(

			         Field::make_image('ua_teens_team_men_quote_image'.ua_teens_lang_prefix(), 'Зображення блоку')
			              ->set_value_type('url'),
			         Field::make_rich_text('ua_teens_team_men_quote_text'.ua_teens_lang_prefix(), 'Текс цитати'),

		         ));

		Container::make( 'post_meta', __('Блок про професію') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(

			         Field::make_image('ua_teens_team_profession_image'.ua_teens_lang_prefix(), 'Зображення блоку')
			              ->set_value_type('url'),
			         Field::make_rich_text('ua_teens_team_men_profession_text'.ua_teens_lang_prefix(), 'інформаційний текст'),
			         Field::make_complex('ua_teens_team_men_profession_program_list'.ua_teens_lang_prefix(), 'Перелік технологій та програм')
			            ->add_fields( array(
			            	Field::make_image('image', 'Логотип продукту або технрології')
				                ->set_value_type('url')
			            ))

		         ));

		Container::make( 'post_meta', __('Блок заклику') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(

			         Field::make_image('ua_teens_team_call_left_image'.ua_teens_lang_prefix(), 'Зображення ліворуч')
			              ->set_value_type('url'),
			         Field::make_image('ua_teens_team_call_right_image'.ua_teens_lang_prefix(), 'Зображення праворуч')
			              ->set_value_type('url'),
			         Field::make_text('ua_teens_team_men_call_text'.ua_teens_lang_prefix(), 'Заклик займатися з людиною'),

		         ));
	}
