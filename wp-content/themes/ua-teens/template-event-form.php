<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Form Event Page
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 *
	 */

	get_header();?>

	<!-- Main screen -->
	<section class="form-main-screen" style="background-image: url(<?php the_post_thumbnail_url();?>)">
		<div class="container">
			<div class="row">
				<h1 class="block-title col-lg-6 small-title upper-title">
					<?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_event_main_title'.ua_teens_lang_prefix());;?>
				</h1>
				<form class="col-lg-6 ajax-form" method="post" >
					<input type="hidden" name="action" value="form_integration_" >
					<input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
					<input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
					<input type="hidden" name="page_name" value="<?php the_title();?>">

					<div class="form-group">
						<label for="main-field-name"><?php echo esc_html( pll__( 'Ваше Імʼя' ) ); ?></label>
						<input type="text" name="name" class="form-control" id="main-field-name">
					</div>
					<div class="form-group">
						<label for="main-field-last-name"><?php echo esc_html( pll__( 'Ваше Прізвище' ) ); ?></label>
						<input type="text" name="last_name" class="form-control" id="main-field-last-name">
					</div>
					<div class="form-group">
						<label for="main-field-birthday"><?php echo esc_html( pll__( 'Дата народження' ) ); ?></label>
						<input type="date" class="form-control birthday" id="main-field-birthday" name="birthday">
						<svg class="piker-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M2.625 20.625C2.625 21.0398 2.96016 21.375 3.375 21.375H20.625C21.0398 21.375 21.375 21.0398 21.375 20.625V10.7812H2.625V20.625ZM20.625 4.3125H16.6875V2.8125C16.6875 2.70937 16.6031 2.625 16.5 2.625H15.1875C15.0844 2.625 15 2.70937 15 2.8125V4.3125H9V2.8125C9 2.70937 8.91563 2.625 8.8125 2.625H7.5C7.39687 2.625 7.3125 2.70937 7.3125 2.8125V4.3125H3.375C2.96016 4.3125 2.625 4.64766 2.625 5.0625V9.1875H21.375V5.0625C21.375 4.64766 21.0398 4.3125 20.625 4.3125Z" fill="#F8F8F8"/>
						</svg>
					</div>
					<div class="form-group">
						<label for="main-field-phone"><?php echo esc_html( pll__( 'Ваш номер телефону' ) ); ?></label>
						<input type="tel" name="phone" class="form-control" id="main-field-phone">
					</div>
					<button type="submit" class="button orange-btn modification">
						<?php echo esc_html( pll__( 'Дізнатися більше' ) ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
							<path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
						</svg>
					</button>
				</form>
			</div>
		</div>
	</section>
<?php get_footer();
