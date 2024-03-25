<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_stydent_works_icon');

	function ua_teens_stydent_works_icon(){
		Container::make( 'term_meta', __('Зображення категорії') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'term_taxonomy', '=', 'student_works-tax' );
		         } )

		         ->add_fields( array(
			         Field::make_image( 'ua_teens_stydent_works_icon'.ua_teens_lang_prefix(), 'Ікока категорії')
			              ->set_value_type('url')
		         ));
	}

	add_action('carbon_fields_register_fields', 'ua_teens_stydent_works_fields');

	function ua_teens_stydent_works_fields(){

		Container::make( 'post_meta', __('Роботи студентів') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'student_works' );
		         } )

		         ->add_fields( array(
		         	 Field::make_select('ua_teens_stydent_works_content_type'.ua_teens_lang_prefix(), 'Вид прежставлення роботи')
								->set_options( array(
									'image' => 'Зображення',
									'video' => 'Відео',
									'audio' => 'Аудіо'
								)),
			         Field::make_image('ua_teens_stydent_works_image'.ua_teens_lang_prefix(), 'Зображення роботи')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'ua_teens_stydent_works_content_type'.ua_teens_lang_prefix(),
						         'value' => 'image',
						         'compare' => '=',
					         )
				         ) ),
			         Field::make_complex('ua_teens_stydent_works_image_list'.ua_teens_lang_prefix(), 'Додаткові зображення проекту')
				        ->set_conditional_logic( array(
					        'relation' => 'AND',
					        array(
						        'field' => 'ua_teens_stydent_works_content_type'.ua_teens_lang_prefix(),
						        'value' => 'image',
						        'compare' => '=',
					        )
				        ) )
								->add_fields( array(
									Field::make_image('image', 'Зображення')
								)),
			         Field::make_text('ua_teens_stydent_works_video_id'.ua_teens_lang_prefix(), 'ID відео роботи з youtube')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'ua_teens_stydent_works_content_type'.ua_teens_lang_prefix(),
					              'value' => 'video',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_image('ua_teens_stydent_works_video_preview'.ua_teens_lang_prefix(), 'Зображення прівʼю відео роботи')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'ua_teens_stydent_works_content_type'.ua_teens_lang_prefix(),
					              'value' => 'video',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_text('ua_teens_stydent_works_audio'.ua_teens_lang_prefix(), 'Посилання на аудіо роботу')
			            ->set_attribute('type', 'url')
				          ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'ua_teens_stydent_works_content_type'.ua_teens_lang_prefix(),
						         'value' => 'audio',
						         'compare' => '=',
					         )
				         ) ),


		         ));

	}