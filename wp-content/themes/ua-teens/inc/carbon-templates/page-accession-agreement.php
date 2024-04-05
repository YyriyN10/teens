<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_accession_agreement_page');

	function ua_teens_accession_agreement_page(){

		Container::make( 'post_meta', __('Додаткові поля') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-accession-agreement.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_accession_agreement_title'.ua_teens_lang_prefix(), 'Заголовок на головному екрані'),
			         Field::make( 'text', 'ua_teens_accession_agreement_subtitle'.ua_teens_lang_prefix(), 'Підзаголовок на головному екрані'),
			         Field::make( 'text', 'ua_teens_accession_agreement_form_name'.ua_teens_lang_prefix(), 'Заголовок форми'),
			         Field::make( 'text', 'ua_teens_accession_agreement_form_text_who'.ua_teens_lang_prefix(), 'Текст у формі, кому дані'),
			         Field::make_textarea( 'ua_teens_accession_agreement_form_text_statement'.ua_teens_lang_prefix(), 'Текст заяви'),
			         Field::make_textarea( 'ua_teens_accession_agreement_form_text_persons_student'.ua_teens_lang_prefix(), 'Текст про підтвердження особи студенту'),
			         Field::make_textarea( 'ua_teens_accession_agreement_form_text_persons_customer'.ua_teens_lang_prefix(), 'Текст про підтвердження особи замовника'),
			         Field::make_textarea( 'ua_teens_accession_agreement_form_text_authority_customer'.ua_teens_lang_prefix(), 'Текст про підтвердження повноважень замовника'),
			         Field::make_textarea( 'ua_teens_accession_agreement_form_text_signature_authority'.ua_teens_lang_prefix(), 'Текст про підтвердження повноважень підпису'),
		         ));

	}
