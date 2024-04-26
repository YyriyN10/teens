<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'ua_teens_blob_post_page_fields');

	function ua_teens_blob_post_page_fields(){
		Container::make( 'post_meta', __('Форматований заголовок статті') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_blob_post_page_format_title'.ua_teens_lang_prefix(), 'Текст')
			          ->help_text('Частину тексту яка має бути помаранчового кольоку оберніть тегом &#60;span&#62;помаранчовий текст в середені&#60;/span&#62;')

		         ));

		Container::make( 'post_meta', __('Посилання на іншийресурс') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'ua_teens_blob_post_page_custom_link'.ua_teens_lang_prefix(), 'Посилання')
			              ->set_attribute('type', 'url')

		         ));

		Container::make( 'post_meta', __('Головна цитата') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_textarea( 'ua_teens_blob_post_page_main_quote'.ua_teens_lang_prefix(), 'Текст цитата')
			          ->set_rows(3)
		         ));

		Container::make( 'post_meta', __('Блок з великим заголовком текстом та відео') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text( 'ua_teens_blob_post_page_large_title'.ua_teens_lang_prefix(), 'Текст заголовку')
				         ->help_text('Частину тексту яка має бути помаранчового кольоку оберніть тегом &#60;span&#62;помаранчовий текст в середені&#60;/span&#62;'),
			         Field::make_rich_text('ua_teens_blob_post_page_large_text'.ua_teens_lang_prefix(), 'Текст'),
			         Field::make_text('ua_teens_blob_post_page_video'.ua_teens_lang_prefix(), 'ID відео з youtube'),
			         Field::make_text('ua_teens_blob_post_page_video_text'.ua_teens_lang_prefix(), 'Підпис відео'),
		         ));

		Container::make( 'post_meta', __('Блок з малим заголовком по центру та текстом') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text( 'ua_teens_blob_post_page_small_title'.ua_teens_lang_prefix(), 'Текст заголовку'),
			         Field::make_rich_text('ua_teens_blob_post_page_mall_text'.ua_teens_lang_prefix(), 'Текст'),
		         ));

		Container::make( 'post_meta', __('Блок з текстом та зображенням') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text( 'ua_teens_blob_post_page_text_image_title'.ua_teens_lang_prefix(), 'Текст заголовку'),
			         Field::make_rich_text('ua_teens_blob_post_page_text_image_text'.ua_teens_lang_prefix(), 'Текст'),
			         Field::make_image('ua_teens_blob_post_page_text_image_image'.ua_teens_lang_prefix(), 'Зображення')
		         ));

		Container::make( 'post_meta', __('Блок з двокольоровим заголовком та текстом') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text( 'ua_teens_blob_post_page_color_title_text_title'.ua_teens_lang_prefix(), 'Текст заголовку')
				         ->help_text('Частину тексту яка має бути помаранчового кольоку оберніть тегом &#60;span&#62;помаранчовий текст в середені&#60;/span&#62;'),
			         Field::make_rich_text('ua_teens_blob_post_page_color_title_text_text'.ua_teens_lang_prefix(), 'Текст'),
		         ));

		Container::make( 'post_meta', __('Блок з цитатою та фото спікера') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_image( 'ua_teens_blob_post_page_quote_photo_image'.ua_teens_lang_prefix(), 'Фото спікера'),
			         Field::make_rich_text('ua_teens_blob_post_page_quote_photo_text'.ua_teens_lang_prefix(), 'Текст'),
		         ));

		Container::make( 'post_meta', __('Блок з переліком') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text( 'ua_teens_blob_post_page_list_block_title'.ua_teens_lang_prefix(), 'Текст заголовку')
				         ->help_text('Частину тексту яка має бути помаранчового кольоку оберніть тегом &#60;span&#62;помаранчовий текст в середені&#60;/span&#62;'),
			         Field::make_text( 'ua_teens_blob_post_page_list_block_subtitle'.ua_teens_lang_prefix(), 'Текст підзаголовку'),
			         Field::make_complex('ua_teens_blob_post_page_list_block_list'.ua_teens_lang_prefix(), 'Перелік')
			          ->add_fields(array(
			          	Field::make_text('title', 'Заголовок'),
				          Field::make_textarea('text', 'text')
				            ->set_rows(3)
			          ))
		         ));

		Container::make( 'post_meta', __('Блок з висновками') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'blog' );
			         $homeFields->where( 'post_template', '=', 'template-blog-post.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text( 'ua_teens_blob_post_page_result_block_title'.ua_teens_lang_prefix(), 'Текст заголовку'),
			         Field::make_textarea( 'ua_teens_blob_post_page_result_block_text'.ua_teens_lang_prefix(), 'Текст')
			          ->set_rows(3)

		         ));

	}
