<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Form Registration Page
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
	      <h1 class="block-title col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-12 offset-0 text-center small-title upper-title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_main_title'.ua_teens_lang_prefix());;?>
        </h1>
	    </div>
	  </div>
	</section>

	<!-- Form content -->
<?php
  $formContentFormTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_form_title'.ua_teens_lang_prefix());
	$formContentFormSubtitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_form_subtitle'.ua_teens_lang_prefix());
	$formContentMainText = carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_content_text'.ua_teens_lang_prefix());
	$formContentContentTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_content_title'.ua_teens_lang_prefix());
	$formContentDirectionsList= carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_content_list'.ua_teens_lang_prefix());
	$formContentSmallText= carbon_get_post_meta(get_the_ID(), 'ua_teens_team_form_page_content_bottom_text'.ua_teens_lang_prefix());

	if ( $formContentFormTitle && $formContentFormSubtitle && $formContentContentTitle && $formContentDirectionsList ):
?>
	<section class="form-content indent-bottom-small indent-top-small">
	  <div class="container">
	    <div class="row">
        <div class="text content col-lg-6">
          <div class="main-text"><?php echo wpautop($formContentMainText);?></div>
          <h3 class="directions-list-tile"><?php echo $formContentContentTitle;?></h3>
          <ul class="directions-list">
            <?php foreach( $formContentDirectionsList as $item ):?>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M16.5 11.134C17.1667 11.5189 17.1667 12.4811 16.5 12.866L10.5 16.3301C9.83333 16.715 9 16.2339 9 15.4641L9 8.5359C9 7.7661 9.83333 7.28497 10.5 7.66987L16.5 11.134Z" fill="#F64B0A"/>
                </svg>
                <?php echo $item['text'];?>
              </li>
            <?php endforeach;?>
          </ul>
          <p class="small-text"><?php echo $formContentSmallText;?></p>
        </div>
        <div class="form-wrapper col-lg-6">
          <div class="inner">
            <h3 class="form-title"><?php echo $formContentFormTitle;?></h3>
            <p class="subtitle small-subtitle"><?php echo $formContentFormSubtitle;?></p>
            <form method="post" class="ajax-form">

              <input type="hidden" name="action" value="form_integration" >
              <input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
              <input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
              <input type="hidden" name="page_name" value="<?php the_title();?>">
              <input type="hidden" name="page_link" value="<?php the_permalink();?>">

              <div class="form-group">
                <label for="registration-field-name"><?php echo esc_html( pll__( 'Ваше Імʼя' ) ); ?></label>
                <input type="text" name="name" class="form-control" id="registration-field-name" required>
              </div>
              <div class="form-group">
                <label for="registration-field-last-name"><?php echo esc_html( pll__( 'Ваше Прізвище' ) ); ?></label>
                <input type="text" name="last_name" class="form-control" id="registration-field-last-name" required>
              </div>
              <div class="form-group">
                <label for="registration-field-birthday"><span>(<?php echo esc_html( pll__( 'тинейджера' ) ); ?>)</span><?php echo esc_html( pll__( 'Дата народження' ) ); ?></label>
                <input type="date" class="form-control birthday" id="registration-field-birthday" name="birthday" required>
                <svg class="piker-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M2.625 20.625C2.625 21.0398 2.96016 21.375 3.375 21.375H20.625C21.0398 21.375 21.375 21.0398 21.375 20.625V10.7812H2.625V20.625ZM20.625 4.3125H16.6875V2.8125C16.6875 2.70937 16.6031 2.625 16.5 2.625H15.1875C15.0844 2.625 15 2.70937 15 2.8125V4.3125H9V2.8125C9 2.70937 8.91563 2.625 8.8125 2.625H7.5C7.39687 2.625 7.3125 2.70937 7.3125 2.8125V4.3125H3.375C2.96016 4.3125 2.625 4.64766 2.625 5.0625V9.1875H21.375V5.0625C21.375 4.64766 21.0398 4.3125 20.625 4.3125Z" fill="#F8F8F8"/>
                </svg>
              </div>
              <div class="form-group">
                <label for="registration-field-phone"><?php echo esc_html( pll__( 'Ваш номер телефону' ) ); ?></label>
                <input type="tel" name="phone" class="form-control" id="registration-field-phone" required>
              </div>
              <div class="form-group">
                <label for="registration-field-email">Email</label>
                <input type="email" name="email" class="form-control" id="registration-field-email" required>
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
	    </div>
	  </div>
	</section>
<?php endif;?>
<?php get_footer();
