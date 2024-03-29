<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_home_page_fields');

	function ua_teens_home_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
					Field::make_text('ua_teens_home_main_screen_title'.ua_teens_lang_prefix(), 'Головний заголовок'),
			        Field::make_text('ua_teens_home_main_screen_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок'),
			        Field::make_select('ua_teens_home_main_screen_bg_type'.ua_teens_lang_prefix(), 'Оберіть тип фонового зображення блоку')
			            ->set_options(array(
			            	'image' => 'Зображення',
				            'video' => 'Відео'
			            )),
			        Field::make_image('ua_teens_home_main_screen_bg_image'.ua_teens_lang_prefix(), 'Фонове зображення')
			            ->set_value_type('url')
				        ->set_conditional_logic( array(
					        'relation' => 'AND',
					        array(
						        'field' => 'ua_teens_home_main_screen_bg_type'.ua_teens_lang_prefix(),
						        'value' => 'image',
						        'compare' => '=',
					        )
				        ) ),

			        Field::make_image('ua_teens_home_main_screen_bg_video'.ua_teens_lang_prefix(), 'Фонове відко')
			             ->set_value_type('url')
			             ->set_conditional_logic( array(
				             'relation' => 'AND',
				             array(
					             'field' => 'ua_teens_home_main_screen_bg_type'.ua_teens_lang_prefix(),
					             'value' => 'video',
					             'compare' => '=',
				             )
			             ) ),

		         ));

		Container::make( 'post_meta', __('Про нас') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
					Field::make_text('ua_teens_home_about_us_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			        Field::make_complex('ua_teens_home_about_us_curses_list'.ua_teens_lang_prefix(), 'Перелік курсів')
		               ->add_fields( array(
		               	    Field::make_text('name', 'Назва курсу'),
			                Field::make_image('icon', 'Іконка курсу')
			                    ->set_value_type('url')

		               ))
		         ));

		Container::make( 'post_meta', __('UA-Teens – це') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			          Field::make_text('ua_teens_home_is_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			          Field::make_complex('ua_teens_home_is_list'.ua_teens_lang_prefix(), 'Перелік описівс')
			                ->add_fields( array(
			                	Field::make_text('title', 'Заголоаок'),
				                Field::make_text('subtitle', 'Підзаголоаок'),
				                Field::make_rich_text('description', 'Опис'),
				                Field::make_select('media_type', 'Зображеняя чи галірея зображень?')
									->set_options( array(
										'image'     => 'Зображення',
										'gallery'   => 'Галірея зображень'
									)),
				                Field::make_image('image', 'Зображення')
					                ->set_conditional_logic( array(
						                'relation' => 'AND',
						                array(
							                'field' => 'media_type',
							                'value' => 'image',
							                'compare' => '=',
						                )
					                ) ),
				                Field::make_complex('gallery', 'Галерея зображень')
					                ->set_conditional_logic( array(
						                'relation' => 'AND',
						                array(
							                'field' => 'media_type',
							                'value' => 'gallery',
							                'compare' => '=',
						                )
					                ) )
				                    ->add_fields( array(
				                    	Field::make_image('image', 'Зображення')
				                    ))
			                ))
		         ));

		Container::make( 'post_meta', __('Активна соціальна позиція') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
					Field::make_text('ua_teens_home_social_position_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку' ),
			        Field::make_text('ua_teens_home_social_position_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок блоку' ),
			        Field::make_rich_text('ua_teens_home_social_position_text'.ua_teens_lang_prefix(), 'Текст блоку' ),
			        Field::make_complex('ua_teens_home_social_position_image_list'.ua_teens_lang_prefix(), 'Галірея зображень')
						->add_fields( array(
							Field::make_image('image', 'Зображення')
						)),
			        Field::make_complex('ua_teens_home_social_position_proposition_list'.ua_teens_lang_prefix(), 'Перелік пропозицій')
			            ->add_fields( array(
			            	Field::make_image('logo', 'Логотип'),
			            	Field::make_text('text', 'Текст пропозиціїї'),
				            Field::make_text('link', 'Посилання на пропозицію')
				                ->set_attribute('type', 'url')

			            ))
		         ));

		Container::make( 'post_meta', __('Онлайн простір') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
					Field::make_text('ua_teens_home_online_area_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			        Field::make_textarea('ua_teens_home_online_area_text'.ua_teens_lang_prefix(), 'Текст блоку')
						->set_rows(4),
			        Field::make_text('ua_teens_home_online_area_link'.ua_teens_lang_prefix(), 'Посилання у кнопку')
			            ->set_attribute('type', 'url')

		         ));

		Container::make( 'post_meta', __('Наша освітня модель') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make('text', 'ua_teens_home_educational_model_bock_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),

			         Field::make_complex('ua_teens_home_educational_model_list'.ua_teens_lang_prefix(), 'Перелік моделей')
			              ->add_fields( array(
				              Field::make_text('title', 'Назва'),
				              Field::make_image('icon', 'Іконка')
				                   ->set_value_type('url'),
				              Field::make_text('small_description', 'Короткий опис'),
				              Field::make_textarea('bl_quote_text', 'Виділтний текст'),
				              Field::make_rich_text('description', 'Опис'),
				              Field::make_image('image', 'Зображення')

			              ))
		         ));

		Container::make( 'post_meta', __('Програма навчання') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
					Field::make_text('ua_teens_home_program_block_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			        Field::make_text('ua_teens_home_program_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок блоку'),
			        Field::make_textarea('ua_teens_home_program_text'.ua_teens_lang_prefix(), 'Текст блоку')
			            ->set_rows(4),
			        Field::make_complex('ua_teens_home_program_list'.ua_teens_lang_prefix(), 'Перелік програм')
			            ->add_fields( array(
			            	Field::make_color('color', 'Колір програми'),
				            Field::make_image('image', 'Тематичне зображення'),
				            Field::make_text('name', 'Назва програми'),
				            Field::make_text('page_link', 'Посилання нп програму')
				                ->set_attribute('type', 'url')

			            ))
		         ));

		Container::make( 'post_meta', __('Розклади навчання') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make('text', 'home_ua_teens_study_schedules_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			         Field::make('text', 'home_ua_teens_study_schedules_call_text'.ua_teens_lang_prefix(), 'Текст призиву'),
			         Field::make('text', 'home_ua_teens_study_schedules_number_classes'.ua_teens_lang_prefix(), 'Кількість занять'),
		         ))

				->add_tab( __( 'Активний розклад' ), array(
					Field::make_complex('home_ua_teens_study_schedules_active_mon'.ua_teens_lang_prefix(), 'Понеділок')
						 ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_active_tue'.ua_teens_lang_prefix(), 'Вівторок')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_active_wed'.ua_teens_lang_prefix(), 'Середа')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_active_thu'.ua_teens_lang_prefix(), 'Четверг')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_active_fri'.ua_teens_lang_prefix(), 'Пʼятниця')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_active_sat'.ua_teens_lang_prefix(), 'Субота')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_active_san'.ua_teens_lang_prefix(), 'Неділя')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     ))
				) )

				->add_tab( __( 'Планується до відкриття' ), array(
					Field::make_complex('home_ua_teens_study_schedules_pending_mon'.ua_teens_lang_prefix(), 'Понеділок')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_pending_tue'.ua_teens_lang_prefix(), 'Вівторок')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_pending_wed'.ua_teens_lang_prefix(), 'Середа')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_pending_thu'.ua_teens_lang_prefix(), 'Четверг')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_pending_fri'.ua_teens_lang_prefix(), 'Пʼятниця')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_pending_sat'.ua_teens_lang_prefix(), 'Субота')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     )),
					Field::make_complex('home_ua_teens_study_schedules_pending_san'.ua_teens_lang_prefix(), 'Неділя')
					     ->set_max(3)
					     ->add_fields( array(
						     Field::make_text('time_start', 'Початок занняття'),
						     Field::make_text('time_stop', 'кінець занняття')
					     ))
				) );




		Container::make( 'post_meta', __('Вартість навчання') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make('text', 'home_ua_teens_study_price_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			         Field::make('text', 'home_ua_teens_study_price_equivalent_text'.ua_teens_lang_prefix(), 'Текст "Еквівалент"'),
			         Field::make('text', 'home_ua_teens_study_price_hours_text'.ua_teens_lang_prefix(), 'Текст кількість годин'),
			         Field::make_rich_text('home_ua_teens_study_price_description'.ua_teens_lang_prefix(), 'Опис'),
			         Field::make_textarea('home_ua_teens_study_price_quote'.ua_teens_lang_prefix(), 'Текст цитати'),
		         ));

		Container::make( 'post_meta', __('Блок з командою') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make('text', 'ua_teens_home_team_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			         Field::make('text', 'ua_teens_home_team_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок блоку'),
			         Field::make_rich_text('ua_teens_home_team_text'.ua_teens_lang_prefix(), 'Текст блоку'),
			         Field::make_text('ua_teens_home_team_page_link'.ua_teens_lang_prefix(), 'Посилання на сторінку команди')
			          ->set_attribute('type', 'url')

		         ));

		Container::make( 'post_meta', __('Блок F.A.Q') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make('text', 'ua_teens_home_faq_title'.ua_teens_lang_prefix(), 'Заголовок блоку'),
			         Field::make('text', 'ua_teens_home_faq_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок блоку'),


		         ));
	}