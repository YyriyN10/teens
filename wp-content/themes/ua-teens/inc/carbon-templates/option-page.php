<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'ua_teens_theme_options' );

	function ua_teens_theme_options() {
		Container::make( 'theme_options', __( 'Theme Options' ) )
		         ->add_tab( __( 'Когнтакти' ), array(
			         Field::make( 'text', 'ua_teens_address'.ua_teens_lang_prefix(), __( 'Адреса офісу' )  ),
			         Field::make( 'text', 'ua_teens_email', __( 'E-mail' )  )
			              ->set_attribute('type', 'email'),
			         Field::make( 'text', 'ua_teens_phone', __( 'Телефон' )  )
			              ->set_attribute('type', 'tel'),
			         Field::make( 'text', 'ua_teens_facebook_link', __( 'Facebook сторінка' )  )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'ua_teens_instagram_link', __( 'Instagram сторінка' )  )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'ua_teens_youtube_link', __( 'Youtube' )  )
			              ->set_attribute('type', 'url'),
			         Field::make_map('ua_teens_map', 'Точка на карті')

		         ) )

						/*->add_tab( 'Програми', array(
							Field::make_text('ua_teens_program_all_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
							Field::make_text('ua_teens_program_all_text_small'.ua_teens_lang_prefix(), 'Текст малий'),
							Field::make_text('ua_teens_program_all_text_big'.ua_teens_lang_prefix(),'Текст великий')
						))*/

						->add_tab( 'Вартість навчання', array(
							Field::make_text('ua_teens_price', 'Вартість')
								->set_attribute('type', 'number'),
							Field::make_select('ua_teens_currency', 'Валюта')
								->set_options( array(
									'USD' => 'Долари',
									'EUR' => 'Євро',
								)),
							Field::make_text('ua_teens_mons_lesson'.ua_teens_lang_prefix(), 'За скільки занять')
						))

						->add_tab( 'Хочеш стати студентом?', array(
							Field::make_text('ua_teens_become_student_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
							Field::make_image('ua_teens_become_student_image'.ua_teens_lang_prefix(), 'Зображення блоку')
								->set_value_type('url')

						));



	}