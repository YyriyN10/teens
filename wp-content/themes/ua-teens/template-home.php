<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Home
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 *
	 */

	get_header();?>

  <!-- Main screen -->
<?php
    $mainScreenTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_main_screen_title'.ua_teens_lang_prefix());
	  $mainScreenSubTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_main_screen_subtitle'.ua_teens_lang_prefix());
	  $mainScreenBgImage = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_main_screen_bg_image'.ua_teens_lang_prefix());

	  if ( $mainScreenSubTitle && $mainScreenTitle ):
?>
  <section class="main-screen" style="background-image: url('<?php echo $mainScreenBgImage;?>')">
    <div class="container">
      <div class="row">
        <div class="content col-xl-7 col-lg-8 col-12">
          <h1 class="block-title big-title big-margin upper-title"><?php echo $mainScreenTitle;?></h1>
          <p class="subtitle big-subtitle"><?php echo $mainScreenSubTitle;?></p>
          <a href="#contact-form" rel="nofollow" class="button orange-btn scroll-to">
              <?php echo esc_html( pll__( 'Зв’яжіться зі мною' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!--About us -->
<?php
  $aboutUsBlockTile = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_about_us_block_title'.ua_teens_lang_prefix());
	$aboutUsCursesList = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_about_us_curses_list'.ua_teens_lang_prefix());

	if ( $aboutUsBlockTile && $aboutUsCursesList ):
?>
  <section class="about-us indent-top-big indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row">
        <h2 class="block-title small-title upper-title col-xl-6 col-lg-7 first-up"><?php echo $aboutUsBlockTile;?></h2>
        <ul class="about-us__curses-list col-xl-6 col-lg-5 d-flex second-up">
          <?php foreach( $aboutUsCursesList as $item ):?>
            <li class="about-us__course-item">
              <div class="inner">
                <div class="icon"><img src="<?php echo $item['icon'];?>" alt="" class="svg-pic"></div>
                <p class="name"><?php echo $item['name'];?></p>
              </div>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- UA-Teens is it -->
<?php
    $weAreItList = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_is_list'.ua_teens_lang_prefix());
    $weAreItBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_is_block_title'.ua_teens_lang_prefix());

    if ( $weAreItList && $weAreItBlockTitle ):
?>
  <section class="we-are-it indent-top-small indent-bottom-big animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title main-title upper-title col-lg-8 col-12 offset-md-0 offset-lg-4">

            <?php echo $weAreItBlockTitle;?>
          <svg class="wotermark-logo" width="549" height="253" viewBox="0 0 549 253" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.25" clip-path="url(#clip0_508_4274)">
              <path d="M259.361 253H0V0H28.8023V224.87H230.524V0H259.326V253H259.361ZM201.721 196.774H57.6397V0H86.442V168.644H172.884V0H201.686V196.774H201.721ZM144.082 0V140.548H115.279V0H144.082Z" fill="#1D1D1B"/>
              <path d="M549 28.0959H433.72V253H404.918V28.0959H289.639V0H549V28.0959ZM376.116 252.966H347.314V84.3219H289.674V56.226H376.116V253V252.966ZM318.476 112.418V252.966H289.674V112.452H318.476V112.418ZM549 84.3219H491.36V252.966H462.558V56.226H549V84.3219ZM549 112.418V252.966H520.198V112.452H549V112.418Z" fill="#1D1D1B"/>
            </g>
            <defs>
              <clipPath id="clip0_508_4274">
                <rect width="549" height="253" fill="white"/>
              </clipPath>
            </defs>
          </svg>
        </h2>
      </div>
      <div class="row second-up">
        <div class="we-are-it__slider-wrapper col-12">
          <div class="we-are-it__slider" id="we-are-it-slider">
            <?php foreach( $weAreItList as $item ):?>
              <div class="slide we-are-it-mein">
                <?php if( $item['media_type'] == 'image' ):?>
                  <div class="image-wrapper">
                    <img
                        src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                        alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                    >
                  </div>
                <?php endif;?>
                <?php if( $item['media_type'] == 'gallery' ):?>
                    <div class="inner-gallery-slider">
                      <?php foreach( $item['gallery'] as $itemGallery ):?>
                        <div class="gallery-slide">
                          <img
                              src="<?php echo wp_get_attachment_image_src($itemGallery['image'], 'full')[0];?>"
                              alt="<?php echo get_post_meta($itemGallery['image'], '_wp_attachment_image_alt', TRUE);?>"
                          >
                        </div>
                      <?php endforeach;?>
                    </div>
                <?php endif;?>

                <div class="text-wrapper">
                  <h2 class="block-title big-title big-margin upper-title"><?php echo $item['title'];?></h2>
                  <div class="text">
                    <h3 class="subtitle small-subtitle"><?php echo $item['subtitle'];?></h3>
                    <?php echo wpautop( $item['description']);?>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
          <button class="control prev-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82" fill="none">
              <path d="M52 19L30 41L52 63" stroke="#F9F9F9" stroke-width="4"/>
            </svg>
          </button>
          <p class="slide-counter"><span class="current">1</span>/<span class="all">5</span> </p>
          <button class="control next-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82" fill="none">
              <path d="M30 19L52 41L30 63" stroke="#F9F9F9" stroke-width="4"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Active social position -->
<?php
    $activeSocialPositionBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_social_position_block_title'.ua_teens_lang_prefix());
	  $activeSocialPositionSubTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_social_position_subtitle'.ua_teens_lang_prefix());
	  $activeSocialPositionText = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_social_position_text'.ua_teens_lang_prefix());
	  $activeSocialPositionGallery = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_social_position_image_list'.ua_teens_lang_prefix());
	  $activeSocialPositionList = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_social_position_proposition_list'.ua_teens_lang_prefix());

	  if ( $activeSocialPositionBlockTitle && $activeSocialPositionText && $activeSocialPositionList ):
?>
  <section class="active-social-position indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row">
        <div class="left-content col-lg-6 first-up">
          <h2 class="block-title big-title big-margin"><?php echo $activeSocialPositionBlockTitle;?></h2>
          <h3 class="subtitle small-subtitle"><?php echo $activeSocialPositionSubTitle;?></h3>
          <?php if( $activeSocialPositionGallery ):?>
              <div class="slider-wrapper" id="active-social-position-slider">
                <?php foreach( $activeSocialPositionGallery as $galleryItem ):?>
                  <div class="slide">
                    <img
                        src="<?php echo wp_get_attachment_image_src($galleryItem['image'], 'full')[0];?>"
                        alt="<?php echo get_post_meta($galleryItem['image'], '_wp_attachment_image_alt', TRUE);?>"
                    >
                  </div>
                <?php endforeach;?>
              </div>
          <?php endif;?>
        </div>
        <div class="right-content col-lg-6 second-up">
          <div class="text"><?php echo wpautop( $activeSocialPositionText);?></div>
          <ul class="proposition-list">
	          <?php foreach( $activeSocialPositionList as $item ):?>
                <li>
                  <?php if( $item['logo'] ):?>
                    <span class="company-logo">
                      <img
                          src="<?php echo wp_get_attachment_image_src($item['logo'], 'full')[0];?>"
                          alt="<?php echo get_post_meta($item['logo'], '_wp_attachment_image_alt', TRUE);?>"
                      >
                    </span>
                  <?php endif;?>
                  <span class="name"><?php echo $item['text'];?></span>
                  <a href="<?php echo $item['link'];?>" rel="nofollow" target="_blank" class="button modification black-btn">
			          <?php echo esc_html( pll__( 'Перейти на сайт' ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
                    </svg>
                  </a>
                </li>
	          <?php endforeach;?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Online space -->
<?php
    $onlineSpaceBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_online_area_block_title'.ua_teens_lang_prefix());
	  $onlineSpaceText = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_online_area_text'.ua_teens_lang_prefix());
	  $onlineSpacelink = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_online_area_link'.ua_teens_lang_prefix());

	  if ( $onlineSpaceBlockTitle && $onlineSpaceText ):
?>
  <section class="online-space indent-top-big indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title big-title big-margin upper-title col-xl-8 col-lg-9"><?php echo $onlineSpaceBlockTitle;?></h2>
        <p class="subtitle big-subtitle col-lx-5 col-lg-7"><?php echo $onlineSpaceText;?></p>
      </div>
      <div class="row second-up">
        <div class="col-12">
          <a href="<?php echo $onlineSpacelink;?>" rel="nofollow" class="button orange-btn">
	          <?php echo esc_html( pll__( 'Дізнатися більше' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
            </svg>
          </a>
          <svg class="bg-pic" width="666" height="304" viewBox="0 0 666 304" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.25" clip-path="url(#clip0_508_4270)">
              <path d="M314.635 304H0V0H34.9405V270.199H279.652V0H314.592V304H314.635ZM244.711 236.44H69.9236V0H104.864V202.639H209.728V0H244.669V236.44H244.711ZM174.788 0V168.88H139.847V0H174.788Z" fill="#F64B0A"/>
              <path d="M666 33.7595H526.153V304H491.212V33.7595H351.365V0H666V33.7595ZM456.272 303.959H421.331V101.32H351.408V67.5601H456.272V304V303.959ZM386.348 135.079V303.959H351.408V135.12H386.348V135.079ZM666 101.32H596.076V303.959H561.136V67.5601H666V101.32ZM666 135.079V303.959H631.059V135.12H666V135.079Z" fill="#F64B0A"/>
            </g>
            <defs>
              <clipPath id="clip0_508_4270">
                <rect width="666" height="304" fill="white"/>
              </clipPath>
            </defs>
          </svg>

        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Education model -->
<?php
    $educationModelBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_educational_model_bock_title'.ua_teens_lang_prefix());
	  $educationModelList= carbon_get_post_meta(get_the_ID(), 'ua_teens_home_educational_model_list'.ua_teens_lang_prefix());

	  if ( $educationModelBlockTitle && $educationModelList ):
?>
  <section class="education-model indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title big-title upper-title big-margin col-12"><?php echo $educationModelBlockTitle;?></h2>
      </div>
      <div class="row justify-content-center second-up">
        <?php foreach( $educationModelList as $item ):?>
          <div class="education-model__item col-lg-4 col-md-6" data-quote="<?php echo $item['bl_quote_text'];?>" data-image="<?php echo $item['image'];?>" >
            <div class="inner">
              <div class="name-wrapper">
                <div class="icon">
                  <img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
                </div>
                <h3 class="name"><?php echo $item['title'];?></h3>
              </div>
              <p class="description"><?php echo $item['small_description'];?></p>
              <a href="#" rel="nofollow" class="detail" >
                <?php echo esc_html( pll__( 'Детальніше' ) ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M9 18L15 12L9 6" stroke="#F64B0A"/>
                </svg>
              </a>
              <div class="modal-desc d-none"><?php echo wpautop( $item['description']);?></div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
      <div class="row">
        <div class="content col-12 text-center">
          <a href="#contact-form" rel="nofollow" class="button orange-btn scroll-to">
            <?php echo esc_html( pll__( 'Стати студентом' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Our programs -->
<?php
    $ourProgramsBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_program_block_title'.ua_teens_lang_prefix());
	  $ourProgramsSubTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_program_subtitle'.ua_teens_lang_prefix());
	  $ourProgramsText = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_program_text'.ua_teens_lang_prefix());
	  $ourProgramsList = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_program_list'.ua_teens_lang_prefix());
	  $i = 0;

	  if ( $ourProgramsBlockTitle && $ourProgramsList ):
?>
  <section class="our-programs indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title big-title upper-title big-margin col-12"><?php echo $ourProgramsBlockTitle;?></h2>

        <?php if( $ourProgramsSubTitle ):?>
          <h3 class="subtitle big-subtitle col-12"><?php echo $ourProgramsSubTitle;?></h3>
        <?php endif;?>
        <?php if( $ourProgramsText ):?>
          <p class="text col-12"><?php echo $ourProgramsText;?></p>
        <?php endif;?>

      </div>
      <div class="row content second-up">
        <?php foreach( $ourProgramsList as $item ): $i++;?>

          <?php if( $item['page_link'] ):?>
            <a href="<?php echo $item['page_link'];?>" target="_blank" class="our-programs__item col-xl-3 col-lg-4 col-sm-6">
              <svg width="310" height="310" viewBox="0 0 310 310" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.15" clip-path="url(#clip0_289_5146<?php echo $i;?>)">
                  <path d="M152.721 310.001H-169V0.000534058H-133.273V275.533H116.95V0.000534058H152.678V310.001H152.721ZM81.2229 241.107H-97.5015V0.000534058H-61.7741V206.639H45.4518V0.000534058H81.1793V241.107H81.2229ZM9.7244 0.000534058V172.213H-26.0031V0.000534058H9.7244Z" fill="<?php echo $item['color'];?>"/>
                  <path d="M512 34.4262H369.003V310H333.276V34.4262H190.279V0.000396729H512V34.4262ZM297.548 309.958H261.821V103.32H190.322V68.894H297.548V310V309.958ZM226.05 137.746V309.958H190.322V137.788H226.05V137.746ZM512 103.32H440.502V309.958H404.774V68.894H512V103.32ZM512 137.746V309.958H476.273V137.788H512V137.746Z" fill="<?php echo $item['color'];?>"/>
                </g>
                <defs>
                  <clipPath id="clip0_289_5146<?php echo $i;?>">
                    <rect width="681" height="310" fill="white" transform="translate(-169)"/>
                  </clipPath>
                </defs>
              </svg>
              <h3 class="name"><?php echo $item['name'];?></h3>
              <div class="image">
                <img
                    src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                    alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
		        <?php if( $item['page_link'] !== '' ):?>
                  <p class="go-program">
			          <?php echo esc_html( pll__( 'Детальніше' ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M6 9L12 15L18 9" stroke="#F9F9F9"/>
                    </svg>
                  </p>
		        <?php endif;?>
            </a>
          <?php else:?>
            <div class="our-programs__item col-xl-3 col-lg-4 col-sm-6">
              <svg width="310" height="310" viewBox="0 0 310 310" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.15" clip-path="url(#clip0_289_5146<?php echo $i;?>)">
                  <path d="M152.721 310.001H-169V0.000534058H-133.273V275.533H116.95V0.000534058H152.678V310.001H152.721ZM81.2229 241.107H-97.5015V0.000534058H-61.7741V206.639H45.4518V0.000534058H81.1793V241.107H81.2229ZM9.7244 0.000534058V172.213H-26.0031V0.000534058H9.7244Z" fill="<?php echo $item['color'];?>"/>
                  <path d="M512 34.4262H369.003V310H333.276V34.4262H190.279V0.000396729H512V34.4262ZM297.548 309.958H261.821V103.32H190.322V68.894H297.548V310V309.958ZM226.05 137.746V309.958H190.322V137.788H226.05V137.746ZM512 103.32H440.502V309.958H404.774V68.894H512V103.32ZM512 137.746V309.958H476.273V137.788H512V137.746Z" fill="<?php echo $item['color'];?>"/>
                </g>
                <defs>
                  <clipPath id="clip0_289_5146<?php echo $i;?>">
                    <rect width="681" height="310" fill="white" transform="translate(-169)"/>
                  </clipPath>
                </defs>
              </svg>
              <h3 class="name"><?php echo $item['name'];?></h3>
              <div class="image">
                <img
                    src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                    alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
		        <?php if( $item['page_link'] !== '' ):?>
                  <p class="go-program">
			          <?php echo esc_html( pll__( 'Детальніше' ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M6 9L12 15L18 9" stroke="#F9F9F9"/>
                    </svg>
                  </p>
		        <?php endif;?>
            </div>
          <?php endif;?>

        <?php endforeach;?>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Study schedules -->
<?php
    $studySchedulesBlockTitle = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_title'.ua_teens_lang_prefix());
	  $studySchedulesSubtitle = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_call_text'.ua_teens_lang_prefix());
	  $studySchedulesClasses = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_number_classes'.ua_teens_lang_prefix());
	  $studySchedulesActive = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_list'.ua_teens_lang_prefix());
	  $studySchedulesPending = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_list'.ua_teens_lang_prefix());

	  if ( $studySchedulesBlockTitle ):
?>
  <section class="study-schedules indent-top-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title upper-title small-title big-margin text-center col-12"><?php echo $studySchedulesBlockTitle;?></h2>
        <?php if( $studySchedulesSubtitle ):?>
          <h3 class="subtitle big-subtitle text-center col-12"><?php echo $studySchedulesSubtitle;?></h3>
        <?php endif;?>
	      <?php if( $studySchedulesClasses ):?>
          <p class="classes col-12 text-center"><?php echo $studySchedulesClasses;?></p>
	      <?php endif;?>
      </div>
      <div class="row second-up">
        <ul class="nav nav-tabs col-12">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#schedules-active"><?php echo esc_html( pll__( 'Активний розклад' ) ); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#schedules-pending"><?php echo esc_html( pll__( 'Планується до відкриття' ) ); ?></a>
          </li>
        </ul>
      </div>
      <div class="row second-up">
        <div class="tab-content indent-bottom-small col-12">
          <div class="tab-pane fade" id="schedules-active">
            <div class="inner">
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Понеділок' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Пн' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $monSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_mon'.ua_teens_lang_prefix());

			            if ( $monSchedulesList ):

				            $groupCount = count($monSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $monSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $monSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>

                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Вівторок' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Вт' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $tueSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_tue'.ua_teens_lang_prefix());

			            if ( $tueSchedulesList ):

				            $groupCount = count($tueSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $tueSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $tueSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Середа' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Ср' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $wedSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_wed'.ua_teens_lang_prefix());

			            if ( $wedSchedulesList ):

				            $groupCount = count($wedSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $wedSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $wedSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Четвер' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Чт' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $thuSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_thu'.ua_teens_lang_prefix());

			            if ( $thuSchedulesList ):

				            $groupCount = count($thuSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $thuSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $thuSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'П’ятниця' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Пт' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $friSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_fri'.ua_teens_lang_prefix());

			            if ( $friSchedulesList ):

				            $groupCount = count($friSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $friSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $friSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Субота' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Сб' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $satSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_sat'.ua_teens_lang_prefix());

			            if ( $satSchedulesList ):

				            $groupCount = count($satSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $satSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $satSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Неділя' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Нд' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $sanSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_active_san'.ua_teens_lang_prefix());

			            if ( $sanSchedulesList ):

				            $groupCount = count($sanSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $sanSchedulesList as $itemOne ):?>
                                <p><span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span></p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $sanSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane active" id="schedules-pending">
            <div class="inner">
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Понеділок' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Пн' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $monSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_mon'.ua_teens_lang_prefix());

			            if ( $monSchedulesList ):

				            $groupCount = count($monSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $monSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $monSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>

                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Вівторок' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Вт' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $tueSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_tue'.ua_teens_lang_prefix());

			            if ( $tueSchedulesList ):

				            $groupCount = count($tueSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $tueSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $tueSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Середа' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Ср' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $wedSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_wed'.ua_teens_lang_prefix());

			            if ( $wedSchedulesList ):

				            $groupCount = count($wedSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $wedSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $wedSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Четвер' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Чт' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $thuSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_thu'.ua_teens_lang_prefix());

			            if ( $thuSchedulesList ):

				            $groupCount = count($thuSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $thuSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $thuSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'П’ятниця' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Пт' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $friSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_fri'.ua_teens_lang_prefix());

			            if ( $friSchedulesList ):

				            $groupCount = count($friSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $friSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $friSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Субота' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Сб' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $satSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_sat'.ua_teens_lang_prefix());

			            if ( $satSchedulesList ):

				            $groupCount = count($satSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $satSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $satSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
              <div class="day">
                <p class="name">
                  <span class="desc"><?php echo esc_html( pll__( 'Неділя' ) ); ?></span>
                  <span class="mob"><?php echo esc_html( pll__( 'Нд' ) ); ?></span>
                </p>
                <div class="schedules">
		            <?php
			            $sanSchedulesList = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_schedules_pending_san'.ua_teens_lang_prefix());

			            if ( $sanSchedulesList ):

				            $groupCount = count($sanSchedulesList);

				            ?>
				            <?php if( $groupCount < 2 ):?>
                          <div class="item one-item" >
				              <?php foreach( $sanSchedulesList as $itemOne ):?>
                                <p>
                                  <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                  <span><?php echo $itemOne['time_start'];?></span> - <span><?php echo $itemOne['time_stop'];?></span>
                                </p>
				              <?php endforeach;?>
                          </div>
			            <?php else:?>
				            <?php foreach( $sanSchedulesList as $itemMany ):?>
                            <div class="item many-item" >
                              <p>
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
                            </div>
				            <?php endforeach;?>
			            <?php endif;?>
			            <?php else:?>
                          <div class="item item-none"></div>
			            <?php endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Cost of education -->
<?php
    $costEducationBlockTitle = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_price_title'.ua_teens_lang_prefix());
	  $costEducationEquivalentText = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_price_equivalent_text'.ua_teens_lang_prefix());
	  $costEducationHours = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_price_hours_text'.ua_teens_lang_prefix());
	  $costEducationDescription = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_price_description'.ua_teens_lang_prefix());
	  $costEducationQuote = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_price_quote'.ua_teens_lang_prefix());

	  if ( $costEducationBlockTitle && $costEducationDescription ):
?>
  <section class="cost-education animation-tracking">
    <div class="container">
      <div class="row">
        <div class="content col-12 indent-top-small indent-bottom-small">
          <div class="left-part first-up">
            <h2 class="block-title big-title small-margin"><?php echo $costEducationBlockTitle;?></h2>
            <?php if( $costEducationEquivalentText ):?>
              <p class="eq-val"><?php echo $costEducationEquivalentText;?></p>
            <?php endif;?>
              <?php
                  $educationPrice = carbon_get_theme_option('ua_teens_price');
                  $priceCurrency = carbon_get_theme_option('ua_teens_currency');
              ?>
            <div class="price-wrapper">
              <p class="price">
                <?php /*if( $priceCurrency == 'USD' ):*/?><!--
                  $<?php /*echo $educationPrice;*/?>
                <?php /*endif;*/?>
	              <?php /*if( $priceCurrency == 'EUR' ):*/?>
                  €<?php /*echo $educationPrice;*/?>
	              --><?php /*endif;*/?>
                ₴ <?php echo $educationPrice;?>
              </p>
              <p class="lesson-quantity"><?php echo carbon_get_theme_option('ua_teens_mons_lesson'.ua_teens_lang_prefix());?></p>
              <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82" fill="none">
                <g opacity="0.2">
                  <path d="M75.1666 43.1183V50.1566C75.1666 52.07 73.5949 53.6416 71.6474 53.6416H65.0533C61.3633 53.6416 57.9808 50.9425 57.6733 47.2525C57.4683 45.1 58.2883 43.0841 59.7233 41.6833C60.9874 40.385 62.7299 39.6333 64.6433 39.6333H71.6474C73.5949 39.6333 75.1666 41.205 75.1666 43.1183Z" fill="#1D1D1B"/>
                  <path d="M52.5483 47.6966C52.2408 44.1091 53.5391 40.59 56.1358 38.0275C58.3224 35.8066 61.3633 34.5083 64.6433 34.5083H66.5908C67.5474 34.5083 68.3333 33.7225 68.1966 32.7658C67.2741 26.1375 61.5341 21.0125 54.6666 21.0125H20.4999C12.9491 21.0125 6.83325 27.1283 6.83325 34.6791V58.5958C6.83325 66.1466 12.9491 72.2625 20.4999 72.2625H54.6666C61.5683 72.2625 67.2741 67.1375 68.1966 60.5091C68.3333 59.5525 67.5474 58.7666 66.5908 58.7666H65.0533C58.5616 58.7666 53.0949 53.915 52.5483 47.6966ZM44.4166 40.6583H23.9166C22.5158 40.6583 21.3541 39.5308 21.3541 38.0958C21.3541 36.6608 22.5158 35.5333 23.9166 35.5333H44.4166C45.8174 35.5333 46.9791 36.695 46.9791 38.0958C46.9791 39.4966 45.8174 40.6583 44.4166 40.6583Z" fill="#1D1D1B"/>
                  <path d="M48.5509 13.5984C49.4392 14.5209 48.6534 15.8875 47.3551 15.8875H20.6026C16.8784 15.8875 13.3934 16.9809 10.4892 18.86C9.15674 19.7142 7.3459 18.7917 7.99507 17.3225C9.9084 12.8467 14.3842 9.73755 19.5434 9.73755H38.7451C42.7084 9.73755 46.2276 11.1384 48.5509 13.5984Z" fill="#1D1D1B"/>
                </g>
              </svg>
            </div>
            <?php if( $costEducationHours ):?>
            <?php endif;?>
            <p class="time-quantity"><?php echo $costEducationHours;?></p>
            <div class="eq-price-wrapper">
                <?php
                    $bank = file_get_contents('https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5');
                    $bank = json_decode($bank, true);
                    $course = '';

                    if ( $bank ){
	                    foreach ( $bank as $item  ){

		                    if( $item['ccy'] == $priceCurrency ){
			                    $course = $item['buy'];
		                    }
	                    }
                    }

                    $uahPrice = $course * $educationPrice / 12;

                ?>
              <?php if( $uahPrice ):?>
                <p class="eq-price"><?php /*echo round($uahPrice);*/?>288 грн</p>
              <?php endif;?>

              <a href="#contact-form" rel="nofollow" class="button modification orange-btn scroll-to">
                  <?php echo esc_html( pll__( 'Стати студентом' ) ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="right-part second-up">
            <div class="text"><?php echo wpautop($costEducationDescription);?></div>
            <?php if( $costEducationQuote ):?>
              <p class="quote"><?php echo $costEducationQuote;?></p>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

   <!-- Student works -->
<?php
	$countWorks = wp_count_posts( 'student_works' )->publish;

	if ( $countWorks > 0 ):
?>
   <section class="student-works indent-top-big indent-bottom-small animation-tracking">
     <div class="container">
       <div class="row first-up">
         <h2 class="block-title big-margin big-title col-xl-10 offset-xl-1 col-12 text-center"><span><?php echo esc_html( pll__( 'Роботи наших талановитих студентів  ' ) ); ?></span></h2>
         <h3 class="subtitle col-12 text-center big-subtitle"><?php echo esc_html( pll__( 'Хочеш вміти теж так? Приєднуйся!' ) ); ?></h3>
       </div>
       <div class="row second-up">
         <div class="content col-12">
           <ul class="student-works__category-list">
	           <?php
		           $studentWorksCat = get_categories( array(
			           'taxonomy'     => 'student_works-tax',
			           'type'         => 'student_works',
			           'child_of'     => false,
			           'parent'       => '',
			           'orderby'      => 'name',
			           'order'        => 'ASC',
			           'hide_empty'   => 1,
			           'hierarchical' => false,
			           'number'       => 0,
			           'pad_counts'   => false,
		           ) );
		           if ( $studentWorksCat ):
              foreach ( $studentWorksCat as $item ):?>
                <li class="student-works__category" data-cat-id="<?php echo $item->term_id;?>">
                  <div class="icon">
                    <img src="<?php echo carbon_get_term_meta($item->term_id, 'ua_teens_stydent_works_icon'.ua_teens_lang_prefix());?>" alt="" class="svg-pic">
                  </div>
                    <span class="name">
                      <?php echo $item->name;?>
                    </span>

                </li>
             <?php endforeach;?>
             <?php endif;?>
           </ul>
           <div class="student-works__slider" id="student-works_slider">
           </div>
           <div class="controls-wrapper">
             <button class="control prev-btn">
               <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82" fill="none">
                 <path d="M52 19L30 41L52 63" stroke="#F9F9F9" stroke-width="4"/>
               </svg>
             </button>
             <p class="slide-counter"><span class="current">1</span>/<span class="all">5</span> </p>
             <button class="control next-btn">
               <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82" fill="none">
                 <path d="M30 19L52 41L30 63" stroke="#F9F9F9" stroke-width="4"/>
               </svg>
             </button>
           </div>
         </div>
       </div>
     </div>
   </section>
 <?php endif;?>

<?php get_template_part('template-parts/block-contacts');?>

	<!--<section class="contact-form">

		<div id="plumsail-form-jh19"><div class="fd-form-loading"></div></div>

	</section>-->
<?php get_footer();
