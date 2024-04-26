<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_program_page_fields');

	function ua_teens_program_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_main_screen_call'.ua_teens_lang_prefix(), __( 'Текст заклику' )  ),
			         Field::make_image('ua_teens_page_program_main_screen_pic'.ua_teens_lang_prefix(), 'Зображення напрямку'),
			        
		         ));

		Container::make( 'post_meta', __('Для кого') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_for_whom_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make_complex('ua_teens_page_program_for_whom_list'.ua_teens_lang_prefix(), 'Перелік')
			            ->add_fields( array(
			            	Field::make_text('name', 'Назва'),
				            Field::make_textarea('description', 'Короткий опис')
				                ->set_rows(2),
				            Field::make_image('image', 'Зображення')

			            ))
		         ));

		Container::make( 'post_meta', __('Яка мета') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_what_purpose_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_image('ua_teens_page_program_what_purpose_image'.ua_teens_lang_prefix(), 'Зображення блоку'),
			         Field::make_rich_text('ua_teens_page_program_what_purpose_text'.ua_teens_lang_prefix(), 'Текст блоку')
		         ));

		Container::make( 'post_meta', __('Програми в яких працюємо') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_we_work_in_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_complex('ua_teens_page_program_we_work_in_learning'.ua_teens_lang_prefix(), 'Нa Self-learning')
								->add_fields( array(
									Field::make_image('image', 'Логотип програми')
								)),
			         Field::make_complex('ua_teens_page_program_we_work_in_workshop'.ua_teens_lang_prefix(), 'Нa Workshop')
			              ->add_fields( array(
				              Field::make_image('image', 'Логотип програми')
			              )),

		         ));

		Container::make( 'post_meta', __('Студент знатиме') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_student_wil_know_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_complex('ua_teens_page_program_student_wil_know_list'.ua_teens_lang_prefix(), 'Перелік отриманих знань')
			              ->add_fields( array(
				              Field::make_text('text', 'Опис знання')
			              )),
		         ));

		Container::make( 'post_meta', __('Студент вмітиме') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_student_can_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_complex('ua_teens_page_program_student_can_list'.ua_teens_lang_prefix(), 'Перелік отриманих вміннь')
			              ->add_fields( array(
				              Field::make_text('text', 'Опис вміння')
			              )),
		         ));

		Container::make( 'post_meta', __('Портфоліо студнта') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_student_portfolio_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_complex('ua_teens_page_program_student_portfolio_list'.ua_teens_lang_prefix(), 'Вміст портфоліо')
			              ->add_fields( array(
				              Field::make_text('level', 'Рівень'),
				              Field::make_text('title', 'Назва кейсу'),
				              Field::make_text('text', 'Опис кейсу')
			              )),
		         ));

		Container::make( 'post_meta', __('Роботи студентів') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make_association('ua_teens_page_program_student_works'.ua_teens_lang_prefix(), __( 'Напрямок робіт' )  )
				         ->set_max( 1 )
				         ->set_types( array(
					         array(
						         'type'      => 'term',
						         'taxonomy' => 'student_works-tax',
					         )
				         ) )

		         ));


		Container::make( 'post_meta', __('Перспективи') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_page_program_prospects_block_title'.ua_teens_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_image('ua_teens_page_program_prospects_image'.ua_teens_lang_prefix(), 'Зображення блоку'),

			         Field::make_complex('ua_teens_page_program_prospects_list'.ua_teens_lang_prefix(), 'Перелік перспектив')
			              ->add_fields( array(
				              Field::make_image('image', 'Іконка')
				                   ->set_value_type('url'),
				              Field::make_text('title', 'Назва перспективи'),
				              Field::make_text('text', 'Опис перспективи')
			              )),
		         ));

		Container::make( 'post_meta', __('Програма навчання') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-program.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('ua_teens_page_program_program_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			         Field::make_text('ua_teens_page_program_program_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок блоку'),
			         Field::make_textarea('ua_teens_home_program_text'.ua_teens_lang_prefix(), 'Текст блоку')
			              ->set_rows(4),
			         Field::make_complex('ua_teens_page_program_program_list'.ua_teens_lang_prefix(), 'Перелік програм')
			              ->add_fields( array(
				              Field::make_color('color', 'Колір програми'),
				              Field::make_image('image', 'Тематичне зображення'),
				              Field::make_text('name', 'Назва програми'),
				              Field::make_text('page_link', 'Посилання нп програму')
				                   ->set_attribute('type', 'url')

			              ))
		         ));


	}
