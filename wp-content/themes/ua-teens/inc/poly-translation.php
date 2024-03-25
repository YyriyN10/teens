<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	if ( defined( 'POLYLANG_VERSION' ) ) {

		add_action('init', 'ua_teens_polylang_strings' );

		function ua_teens_polylang_strings() {

			if( ! function_exists( 'pll_register_string' ) ) {
				return;
			}

			pll_register_string(
				'ua_teens_btn_send_my',
				'Зв’яжіться зі мною',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_btn_go_site',
				'Перейти на сайт',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_btn_more',
				'Дізнатися більше',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_btn_detail',
				'Детальніше',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_btn_student',
				'Стати студентом',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_copy',
				'Всі права захищені',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_dev_by',
				'Розроблено в',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_student_works_title',
				'Роботи наших талановитих студентів',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_student_works_subtitle',
				'Хочеш вміти теж так? Приєднуйся!',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_schedules_pending',
				'Планується до відкриття',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_schedules_active',
				'Активний розклад',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_footer_logo_text',
				'Простір іноваційної освіти',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_footer_menu_name_program',
				'Програми',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_footer_menu_name_info',
				'Інформація',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_contact_map_title',
				'Де ми знаходимось?',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_contact_form_title',
				'Залишились питання?',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_contact_form_call',
				'Залиште заявку і наш менеджер зв’яжеться з вами',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_popup_contact_form_title',
				'ЗХочете дізнатись більше?  ',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_popup_contact_form_call',
				'Надсилайте заявку і наш менеджер звʼяжеться з вами',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_page_404_title',
				'УПС... щось не те...',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_page_404_text',
				'Сторінка, на яку ви намагаєтесь перейти, не існує...',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_page_404_button',
				'Повернутись на головну',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_page_thx_text',
				'Заявка прийнята!',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_direction_text1',
				'НА WORKSHOPS',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_direction_text2',
				'НА SELF-LEARNING',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_dtn_test',
				'Безкоштовне заняття',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_level_text',
				'рівень',
				'Переклади',
				false
			);


			pll_register_string(
				'ua_teens_placeholder_name',
				'І’мя',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_placeholder_phone',
				'Телефон',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_placeholder_massege',
				'Полвідомлення',
				'Переклади',
				false
			);

			pll_register_string(
				'ua_teens_form_submit',
				'Відправити',
				'Переклади',
				false
			);

		}
	}