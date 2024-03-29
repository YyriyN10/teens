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
			         Field::make_image('ua_teens_team_men_main_screen_pic'.ua_teens_lang_prefix(), 'Зображення на головному екрані')
		         ));

		Container::make( 'post_meta', __('Освіта') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_team_men_education_university'.ua_teens_lang_prefix(), 'Місце навчання'),
			         Field::make_rich_text('ua_teens_team_men_education_text'.ua_teens_lang_prefix(), 'Текс блоку'),
			         Field::make_rich_text('ua_teens_team_men_education_quote'.ua_teens_lang_prefix(), 'Текст цитати'),
			         Field::make_complex('ua_teens_team_men_education_main_pic_list'.ua_teens_lang_prefix(), 'Галірея з головним зображенням блоку')
			          ->add_fields(array(
			          	Field::make_image('image', 'Зображення')
			          )),
			         Field::make_complex('ua_teens_team_men_education_bottom_pic_list'.ua_teens_lang_prefix(), 'Галірея з великим нижнім зображенням блоку')
			              ->add_fields(array(
				              Field::make_image('image', 'Зображення')
			              )),
			         Field::make_complex('ua_teens_team_men_education_bottom__mini_pic_list'.ua_teens_lang_prefix(), 'Галірея з малим нижнім зображенням блоку')
			              ->add_fields(array(
				              Field::make_image('image', 'Зображення')
			              )),
		         ));

		Container::make( 'post_meta', __('Блок роботи/програми') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(

			         Field::make_select('ua_teens_team_programs_works_type'.ua_teens_lang_prefix(), 'Оберіть тип контенту')
			              ->set_options(array(
			              	'works'    => 'Роботи',
				              'programs' => 'Програми'
			              )),
			         Field::make_text('ua_teens_team_programs_works_work_text'.ua_teens_lang_prefix(), 'Текст про перегляд робіт')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'ua_teens_team_programs_works_type'.ua_teens_lang_prefix(),
						         'value' => 'works',
						         'compare' => '=',
					         )
				         ) ),
			         Field::make_text('ua_teens_team_programs_works_work_text_link'.ua_teens_lang_prefix(), 'Текст для переходу по посиланню')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'ua_teens_team_programs_works_type'.ua_teens_lang_prefix(),
					              'value' => 'works',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_text('ua_teens_team_programs_works_work_link'.ua_teens_lang_prefix(), 'Посилання')
				            ->set_attribute('type', 'url')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'ua_teens_team_programs_works_type'.ua_teens_lang_prefix(),
					              'value' => 'works',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_complex('ua_teens_team_programs_works_programs_list'.ua_teens_lang_prefix(), 'Перелік програм')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'ua_teens_team_programs_works_type'.ua_teens_lang_prefix(),
					              'value' => 'programs',
					              'compare' => '=',
				              )
			              ) )
			              ->add_fields(array(
			              	Field::make_image('program_logo', 'Логотип програми')
			              ))

		         ));

		Container::make( 'post_meta', __('Блок заклику') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'team' );
			         $homeFields->where( 'post_template', '=', 'template-team-men.php' );
		         } )

		         ->add_fields( array(

			         Field::make_image('ua_teens_team_call_left_image'.ua_teens_lang_prefix(), 'Зображення ліворуч'),
			         Field::make_image('ua_teens_team_call_right_image'.ua_teens_lang_prefix(), 'Зображення праворуч'),
			         Field::make_text('ua_teens_team_men_call_text'.ua_teens_lang_prefix(), 'Заклик займатися з людиною'),

		         ));
	}
