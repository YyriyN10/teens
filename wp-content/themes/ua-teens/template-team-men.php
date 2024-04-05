<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template team men
	 *
	 * Template post type: team
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 */

	get_header();?>
<!-- Main Screen -->
<?php
	$mainScreenTeamMenPic = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_main_screen_pic'.ua_teens_lang_prefix());
	$mainScreenTeamPosition = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_main_position'.ua_teens_lang_prefix());
	$mainScreenTeamDirection= carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_main_direction'.ua_teens_lang_prefix());

	$mainScreenTeamTitle = get_the_title();

	$mainScreenTeamTitle = explode(' ', $mainScreenTeamTitle );



	if ( $mainScreenTeamMenPic && $mainScreenTeamDirection ):
?>
	<section class="main-screen-team-men" style = "background-image: url('<?php echo wp_get_attachment_image_src($mainScreenTeamMenPic, 'full')[0];?>')" >
	  <div class="container">
	    <div class="row">
        <?php if( $mainScreenTeamTitle ):?>
          <h1 class="block-title upper-title big-title col-12">
            <span><?php echo $mainScreenTeamTitle[0];?></span>
	          <?php echo $mainScreenTeamTitle[1];?>
          </h1>
        <?php endif;?>

		    <div class="pic-wrapper col-xl-5 offset-xl-3 col-lg-6 offset-lg-2">
			    <img
				    src="<?php echo wp_get_attachment_image_src($mainScreenTeamMenPic, 'full')[0];?>"
				    alt="<?php echo get_post_meta($mainScreenTeamMenPic, '_wp_attachment_image_alt', TRUE);?>"
			    >
		    </div>
		    <div class="text col-lg-4">
					<p class="direction subtitle small-subtitle"><?php echo $mainScreenTeamDirection;?></p>
			    <p class="position"><?php echo $mainScreenTeamPosition;?></p>
		    </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

  <!-- Education -->
<?php
  $educationTeamMenUniversity = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_education_university'.ua_teens_lang_prefix());
	$educationTeamMenText = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_education_text'.ua_teens_lang_prefix());
	$educationTeamMenQuote = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_education_quote'.ua_teens_lang_prefix());
	$educationTeamMenMainPicList = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_education_main_pic_list'.ua_teens_lang_prefix());
	$educationTeamMenBidPicList = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_education_bottom_pic_list'.ua_teens_lang_prefix());
	$educationTeamMenSmallPicList = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_education_bottom__mini_pic_list'.ua_teens_lang_prefix());

	if ($educationTeamMenUniversity && $educationTeamMenText && $educationTeamMenMainPicList)
?>
  <section class="education-team-men indent-top-small indent-bottom-small">
    <div class="container">
      <div class="row">
        <div class="left-part col-md-6">
          <h2 class="block-title small-title small-margin upper-title"><span><?php echo esc_html( pll__( 'Освіта' ) ); ?></span></h2>
          <p class="subtitle small-subtitle"><?php echo $educationTeamMenUniversity;?></p>
          <div class="text"><?php echo wpautop($educationTeamMenText);?></div>
          <?php if( $educationTeamMenQuote ):?>
            <div class="quote">
              <svg xmlns="http://www.w3.org/2000/svg" width="180" height="150" viewBox="0 0 180 150" fill="none">
                <g opacity="0.2">
                  <path d="M180 100.503C180 111.373 176.512 120.432 169.535 127.679C162.558 134.925 153.488 138.549 142.326 138.549C128.651 138.549 117.349 133.532 108.419 123.498C99.7674 113.185 95.4418 100.921 95.4418 86.7064C95.4418 66.081 103.116 48.382 118.465 33.6097C133.814 18.8374 152.372 11.4512 174.14 11.4512L174.977 17.3044C161.581 17.3044 149.302 22.0427 138.14 31.5193C126.977 40.9959 121.395 51.866 121.395 64.1299C121.395 66.9171 121.674 69.0075 122.233 70.4011C123.07 71.7947 124.186 72.4914 125.581 72.4914C127.535 72.4914 130.465 71.6553 134.372 69.9829C138.558 68.0318 142.047 67.0564 144.837 67.0564C154.047 67.0564 162.139 70.2618 169.116 76.6725C176.372 82.8043 180 90.7479 180 100.503ZM84.5582 100.503C84.5582 111.373 81.0697 120.432 74.0931 127.679C67.1162 134.925 58.0465 138.549 46.8837 138.549C33.2092 138.549 21.907 133.532 12.9767 123.498C4.32558 113.185 0 100.921 0 86.7064C0 66.081 7.67441 48.382 23.0233 33.6097C38.3722 18.8374 56.9302 11.4512 78.6978 11.4512L79.5349 17.3044C66.1396 17.3044 53.8606 22.0427 42.6978 31.5193C31.535 40.9959 25.9535 51.866 25.9535 64.1299C25.9535 66.9171 26.2326 69.0075 26.7906 70.4011C27.628 71.7947 28.7442 72.4914 30.1396 72.4914C32.093 72.4914 35.0232 71.6553 38.9302 69.9829C43.1163 68.0318 46.6045 67.0564 49.3953 67.0564C58.6047 67.0564 66.6976 70.2618 73.6745 76.6725C80.9303 82.8043 84.5582 90.7479 84.5582 100.503Z" fill="#F64B0A"/>
                </g>
              </svg>
              <?php echo wpautop($educationTeamMenQuote);?>
            </div>
          <?php endif;?>
          <?php if( $educationTeamMenBidPicList ):?>
            <div class="big-gallery" id="men-big-gallery">
              <?php foreach( $educationTeamMenBidPicList as $item ):?>
                <div class="slide">
                  <img
                      src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              <?php endforeach;?>
            </div>
          <?php endif;?>
        </div>
        <div class="right-part col-xl-5 offset-xl-1 col-md-6">
          <div class="main-gallery" id="men-main-gallery">
		        <?php foreach( $educationTeamMenMainPicList as $item ):?>
              <div class="slide">
                <img
                    src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                    alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
		        <?php endforeach;?>
          </div>
	        <?php if( $educationTeamMenSmallPicList ):?>
            <div class="small-gallery" id="men-small-gallery">
			        <?php foreach( $educationTeamMenSmallPicList as $item ):?>
                <div class="slide">
                  <img
                      src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
			        <?php endforeach;?>
            </div>
	        <?php endif;?>
        </div>
      </div>
    </div>
  </section>

  <!-- Work & programs -->
<?php
  $teamMenWorksProgramsType = carbon_get_post_meta(get_the_ID(),'ua_teens_team_programs_works_type'.ua_teens_lang_prefix());
	$teamMenWorksProgramsList = carbon_get_post_meta(get_the_ID(),'ua_teens_team_programs_works_programs_list'.ua_teens_lang_prefix());
	$teamMenWorksProgramsLink = carbon_get_post_meta(get_the_ID(),'ua_teens_team_programs_works_work_link'.ua_teens_lang_prefix());
	$teamMenWorksProgramsMainText = carbon_get_post_meta(get_the_ID(),'ua_teens_team_programs_works_work_text'.ua_teens_lang_prefix());
	$teamMenWorksProgramsLinkText = carbon_get_post_meta(get_the_ID(),'ua_teens_team_programs_works_work_text_link'.ua_teens_lang_prefix());

	if ($teamMenWorksProgramsList || $teamMenWorksProgramsLink ):
?>
  <section class="team-men-works-programs indent-top-small indent-bottom-small">
    <div class="container">
      <div class="row">
        <div class="content col-12">
          <?php if( $teamMenWorksProgramsType == 'works' ):?>
            <h2 class="block-title small-title upper-title"><?php echo $teamMenWorksProgramsMainText;?>
              <span><a href="<?php echo $teamMenWorksProgramsLink;?>" target="_blank" rel="nofollow"><?php echo $teamMenWorksProgramsLinkText;?></a></span>
            </h2>
          <?php endif;?>
          <?php if( $teamMenWorksProgramsType == 'programs' ):?>
            <h2 class="block-title small-title upper-title">
              <?php echo esc_html( pll__( 'Працює в таких' ) ); ?> <span><?php echo esc_html( pll__( 'програмах:' ) ); ?></span>
            </h2>
            <ul class="programs-list">
              <?php foreach( $teamMenWorksProgramsList as $item ):?>
                <li>
                  <img
                      src="<?php echo wp_get_attachment_image_src($item['program_logo'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($item['program_logo'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </li>
              <?php endforeach;?>
            </ul>
          <?php endif;?>
          <div class="block-pic">
            <img src="<?php echo THEME_PATH;?>/assets/img/team-men-arrow.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Call to -->
<?php
  $callToLeftPic = carbon_get_post_meta(get_the_ID(),'ua_teens_team_call_left_image'.ua_teens_lang_prefix());
	$callToRightPic = carbon_get_post_meta(get_the_ID(),'ua_teens_team_call_right_image'.ua_teens_lang_prefix());
	$callToText = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_call_text'.ua_teens_lang_prefix());
	$callToIndividualConsultationLink = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_call_individual_consult'.ua_teens_lang_prefix());

	if ( $callToLeftPic && $callToRightPic && $callToText ):
?>
  <section class="call-to indent-top-small indent-bottom-small">
    <div class="container">
      <div class="row">
        <div class="content col-xl-10 offset-xl-1 d-flex">
          <div class="left-pic">
            <img
                class="lazy"
                data-src="<?php echo wp_get_attachment_image_src($callToLeftPic, 'full')[0];?>"
                alt="<?php echo get_post_meta($callToLeftPic, '_wp_attachment_image_alt', TRUE);?>"
            >
          </div>
          <div class="text">
            <h2 class="title">
              <?php echo esc_html( pll__( 'Хочеш' ) ); ?>
              <span><?php echo esc_html( pll__( 'стати' ) ); ?></span>
              <span><?php echo esc_html( pll__( 'студентом' ) ); ?></span>
            </h2>
            <p><?php echo $callToText;?></p>
          </div>
          <div class="right-pic">
            <img
                class="lazy"
                data-src="<?php echo wp_get_attachment_image_src($callToRightPic, 'full')[0];?>"
                alt="<?php echo get_post_meta($callToRightPic, '_wp_attachment_image_alt', TRUE);?>"
            >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="buttons-wrapper col-xl-10 offset-xl-1 d-flex">
          <a href="#" rel="nofollow" class="button orange-btn" data-toggle="modal" data-target="#innerPageFormModal">
		        <?php echo esc_html( pll__( 'Надіслати заявку' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
            </svg>
          </a>

	        <?php if( $callToIndividualConsultationLink ):?>
            <a href="<?php echo $callToIndividualConsultationLink ;?>" target="_blank" rel="nofollow" class="button orange-border">
			        <?php echo esc_html( pll__( 'Індивідуальна консультація' ) ); ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="#F64B0A"/>
              </svg>
            </a>
	        <?php endif;?>

        </div>
      </div>
    </div>
  </section>
<?php endif;?>
<?php get_footer();
