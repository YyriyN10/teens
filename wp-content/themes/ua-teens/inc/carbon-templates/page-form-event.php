<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_team_form_page_event');

	function ua_teens_team_form_page_event(){

		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-event-form.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_team_form_page_event_main_title'.ua_teens_lang_prefix(), 'Заголовок на головному екрані'),
		         ));


	}
