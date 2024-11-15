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
        <div class="content col-xl-8 col-lg-9 col-12">
          <h1 class="block-title big-title big-margin "><?php echo $mainScreenTitle;?></h1>
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
        <h2 class="block-title small-title upper-title col-12 first-up text-center large-margin"><?php echo $aboutUsBlockTile;?></h2>
        <div class="about-us__wrapper col-12">
          <ul class="about-us__curses-list col-12 second-up">
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
    </div>
  </section>
<?php endif;?>

  <!-- UA-Teens is it -->
<?php
    $weAreItList = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_is_list'.ua_teens_lang_prefix());
    $weAreItBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_is_block_title'.ua_teens_lang_prefix());

    if ( $weAreItList && $weAreItBlockTitle ):
?>
  <section class="we-are-it indent-top-small indent-bottom-big animation-tracking" id="anchor-about-us">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title main-title small-title small-margin upper-title col-lg-8 col-12 offset-md-0 offset-lg-4">

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
                  <h2 class="block-title small-title big-margin upper-title"><?php echo $item['title'];?></h2>
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
          <h2 class="block-title small-title big-margin"><?php echo $activeSocialPositionBlockTitle;?></h2>
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
        <h2 class="block-title big-title big-margin upper-title col-xl-9 col-lg-9"><?php echo $onlineSpaceBlockTitle;?></h2>
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
        <h2 class="block-title big-title upper-title larg-margin col-12"><?php echo $educationModelBlockTitle;?></h2>
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
                    class="lazy"
                    data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
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
                    class="lazy"
                    data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
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
    <div class="white-side">
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
      </div>
    </div>
    <div class="dark-side">
      <div class="container">
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
                            <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            <?php else:?>
                              <p style="color: #F9F9F9"><span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span></p>
                            <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>" >
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>" >
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
                          <div class="item many-item" style="background-color: <?php echo $itemMany['time_bg'];?>">
	                          <?php if( $itemMany['time_bg'] == '#F7F00F' ||  $itemMany['time_bg'] == '#FFDBB5'):?>
                              <p style="color: #1D1D1B">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php else:?>
                              <p style="color: #F9F9F9">
                                <span class="tag"><?php echo esc_html( pll__( 'Незабаром' ) ); ?></span>
                                <span><?php echo $itemMany['time_start'];?></span> - <span><?php echo $itemMany['time_stop'];?></span>
                              </p>
	                          <?php endif;?>
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
	  $costEducationEuroText = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_study_price_euro_price'.ua_teens_lang_prefix());

	  if ( $costEducationBlockTitle && $costEducationDescription ):
?>
  <section class="cost-education animation-tracking" id="anchor-cost-education">
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
                ₴<?php echo $educationPrice;?>
              </p>
              <p class="lesson-quantity">
                <?php if( $costEducationEuroText ):?>
                  <span><?php echo $costEducationEuroText;?></span>
                <?php endif;?>
                <?php echo carbon_get_theme_option('ua_teens_mons_lesson'.ua_teens_lang_prefix());?>
              </p>
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

  <?php
      $specialOfferTitle = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_special_offer_title'.ua_teens_lang_prefix());
	    $specialOfferEquivalent = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_special_offer_equivalent_text'.ua_teens_lang_prefix());
	    $specialOfferOldPrice = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_special_offer_euro_price'.ua_teens_lang_prefix());
	    $specialOfferNewPrice = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_special_offer_new_price'.ua_teens_lang_prefix());
	    $specialOfferCall = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_special_offer_call_text'.ua_teens_lang_prefix());
	    $specialOfferText = carbon_get_post_meta(get_the_ID(), 'home_ua_teens_special_offer_description'.ua_teens_lang_prefix());

      if( $specialOfferOldPrice && $specialOfferNewPrice ):?>
      <!--Спеціальна пропозиція  -->
      <section class="special-offer indent-top-big indent-bottom-small">
        <div class="container">
          <div class="row">
            <div class="price-content col-lg-6 text-center">
              <div class="inner">
                <h3 class="subtitle small-subtitle"><?php echo $specialOfferTitle;?></h3>
                <p class="sub-call"><?php echo $specialOfferEquivalent;?></p>
                <div class="price-wrapper">
                  <p class="old-price">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="19" viewBox="0 0 13 19" fill="none">
                      <path d="M5.14453 12.207C5.61328 13.2383 6.32422 14.0391 7.27734 14.6094C8.23047 15.1719 9.30859 15.4531 10.5117 15.4531C11.2852 15.4531 12.0781 15.293 12.8906 14.9727V18.2773C12.1719 18.4883 11.3633 18.5938 10.4648 18.5938C8.33203 18.5938 6.47656 18.0312 4.89844 16.9062C3.32031 15.7812 2.25 14.2148 1.6875 12.207H0L0.457031 10.2852H1.37109C1.35547 10.1367 1.34766 9.88281 1.34766 9.52344C1.34766 9.1875 1.35547 8.94531 1.37109 8.79688H0L0.480469 6.875H1.71094C2.29688 4.89062 3.39844 3.33203 5.01562 2.19922C6.64062 1.06641 8.47266 0.5 10.5117 0.5C11.3086 0.5 12.1016 0.617188 12.8906 0.851562L12.1758 3.93359C11.5742 3.73828 10.9961 3.64062 10.4414 3.64062C9.31641 3.64062 8.28125 3.92578 7.33594 4.49609C6.39062 5.06641 5.66797 5.85938 5.16797 6.875H11.4727L11.0391 8.79688H4.60547C4.57422 9.10938 4.55859 9.35156 4.55859 9.52344C4.55859 9.71875 4.57422 9.97266 4.60547 10.2852H10.6875L10.2305 12.207H5.14453Z" fill="#CFCFCF"/>
                    </svg>
                    <span><?php echo $specialOfferOldPrice;?></span>
                  </p>
                  <p class="new-price"><?php echo $specialOfferNewPrice;?></p>
                </div>
                <p class="call"><?php echo $specialOfferCall;?></p>
                <a href="#contact-form" rel="nofollow" class="button modification orange-btn scroll-to">
		              <?php echo esc_html( pll__( 'Скористатись пропозицією' ) ); ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
                  </svg>
                </a>
              </div>
            </div>
            <div class="text-content col-lg-6">
              <?php echo wpautop($specialOfferText);?>
              <svg xmlns="http://www.w3.org/2000/svg" width="106" height="74" viewBox="0 0 106 74" fill="none">
                <g clip-path="url(#clip0_1461_2498)">
                  <path d="M50.343 48.9383H0V0H5.59446V43.4999H44.7521V0H50.3464V48.9383H50.343ZM39.1541 38.0617H11.1889V0H16.7834V32.6266H33.5632V0H39.1575V38.065L39.1541 38.0617ZM27.9652 27.1849H22.3707V0H27.9652V27.1882V27.1849Z" fill="#1D1D1B"/>
                  <path d="M106.567 5.43835H84.193V48.9383H78.5985V5.43835H56.2243V0H106.567V5.43835ZM73.0041 48.9383H67.4096V16.3116H56.2207V10.8733H73.0041V48.9383ZM61.8152 48.9383H56.2207V21.75H61.8152V48.9383ZM106.564 16.3116H95.3748V48.9383H89.7803V10.8767H106.56V16.315L106.564 16.3116ZM106.564 48.9383H100.969V21.75H106.564V48.9383Z" fill="#1D1D1B"/>
                  <path d="M2.28882e-05 57.8509H3.01733V67.7753C3.01733 68.6311 3.09544 69.235 3.24807 69.5903C3.40071 69.9457 3.65629 70.2287 4.01128 70.4392C4.36625 70.6498 4.79223 70.7567 5.29274 70.7567C5.82166 70.7567 6.27958 70.6393 6.66296 70.4012C7.04633 70.1666 7.30901 69.8629 7.45811 69.5007C7.60364 69.1348 7.67819 68.4378 7.67819 67.4094V57.8474H10.6955V66.9988C10.6955 68.5413 10.6068 69.6145 10.4257 70.2114C10.2482 70.8084 9.9039 71.3881 9.39984 71.9437C8.89577 72.4994 8.3136 72.9133 7.6569 73.179C6.99663 73.4448 6.23344 73.5794 5.36018 73.5794C4.21362 73.5794 3.21967 73.3241 2.37127 72.8133C1.52288 72.3026 0.915866 71.6607 0.553788 70.8946C0.188162 70.1252 0.00712244 68.8277 0.00712244 66.9988V57.8474L2.28882e-05 57.8509Z" fill="#1D1D1B"/>
                  <path d="M17.9003 57.8506H20.9496L27.0233 73.1994H23.8995L22.6642 70.0385H16.2213L14.9363 73.1994H11.8125L17.9003 57.8506ZM19.4445 61.919L17.3252 67.1882H21.5496L19.4445 61.919Z" fill="#1D1D1B"/>
                  <path d="M33.7787 66.2192H28.3262V68.8694H33.7787V66.2192Z" fill="#1D1D1B"/>
                  <path d="M34.8223 57.8506H43.5476V60.732H40.6687V73.1994H37.6231V60.732H34.8223V57.8506Z" fill="#1D1D1B"/>
                  <path d="M55.8827 68.3482H46.4688C46.6037 69.1556 46.9692 69.7975 47.5585 70.2738C48.1478 70.7499 48.9004 70.9881 49.8162 70.9881C50.9094 70.9881 51.8501 70.6153 52.6382 69.8699L55.1053 70.9983C54.4913 71.8472 53.7529 72.4753 52.8938 72.8825C52.0348 73.2896 51.016 73.4933 49.834 73.4933C48.0022 73.4933 46.5113 72.9308 45.3576 71.8092C44.204 70.6877 43.6289 69.2798 43.6289 67.589C43.6289 65.8982 44.204 64.4177 45.3505 63.2757C46.5007 62.13 47.9383 61.5605 49.6705 61.5605C51.5094 61.5605 53.0038 62.1335 54.1575 63.2757C55.3077 64.4213 55.8863 65.9327 55.8863 67.8099L55.8756 68.3517L55.8827 68.3482ZM52.9542 66.1051C52.759 65.4737 52.3791 64.9561 51.8076 64.5592C51.2396 64.1624 50.5758 63.9658 49.8233 63.9658C49.0068 63.9658 48.2897 64.19 47.672 64.6317C47.2852 64.9112 46.9266 65.4013 46.5964 66.1018H52.9506L52.9542 66.1051Z" fill="#1D1D1B"/>
                  <path d="M68.8536 68.3484H59.4395C59.5744 69.1558 59.9399 69.7977 60.5292 70.274C61.1185 70.7502 61.8711 70.9883 62.7869 70.9883C63.8803 70.9883 64.821 70.6155 65.6089 69.8701L68.0761 70.9986C67.462 71.8475 66.7236 72.4756 65.8646 72.8828C65.0055 73.2899 63.9867 73.4935 62.8047 73.4935C60.9729 73.4935 59.4821 72.931 58.3284 71.8095C57.1747 70.688 56.5996 69.2801 56.5996 67.5893C56.5996 65.8985 57.1747 64.418 58.3213 63.2759C59.4714 62.1302 60.9091 61.5608 62.6414 61.5608C64.4801 61.5608 65.9747 62.1337 67.1284 63.2759C68.2784 64.4215 68.857 65.9329 68.857 67.8101L68.8463 68.352L68.8536 68.3484ZM65.9249 66.1054C65.7297 65.474 65.3498 64.9563 64.7783 64.5595C64.2104 64.1627 63.5465 63.966 62.794 63.966C61.9775 63.966 61.2605 64.1902 60.6429 64.6319C60.2559 64.9114 59.8974 65.4015 59.5673 66.102H65.9213L65.9249 66.1054Z" fill="#1D1D1B"/>
                  <path d="M70.1271 61.847H73.0556V63.01C73.7195 62.4648 74.323 62.0851 74.8625 61.8747C75.4021 61.6608 75.9523 61.5537 76.5203 61.5537C77.6775 61.5537 78.6608 61.9472 79.4666 62.7339C80.1445 63.3999 80.4854 64.3902 80.4854 65.6981V73.1999H77.5887V68.2274C77.5887 66.8713 77.5249 65.9741 77.4006 65.529C77.2763 65.0838 77.0562 64.7457 76.7475 64.5111C76.4352 64.2764 76.0516 64.1625 75.5973 64.1625C75.0045 64.1625 74.497 64.3558 74.0709 64.7422C73.6449 65.1287 73.3503 65.6601 73.1871 66.3434C73.1019 66.6988 73.0592 67.4649 73.0592 68.6451V73.1999H70.1306V61.847H70.1271Z" fill="#1D1D1B"/>
                  <path d="M89.3667 63.4347L87.5527 65.1981C86.8144 64.4907 86.147 64.1352 85.5472 64.1352C85.217 64.1352 84.9615 64.2043 84.7734 64.3388C84.5852 64.4734 84.4928 64.6425 84.4928 64.846C84.4928 64.9979 84.5533 65.1395 84.6704 65.2706C84.7875 65.3981 85.0786 65.5742 85.5435 65.7985L86.6157 66.3195C87.7445 66.8613 88.5218 67.4168 88.9443 67.9793C89.3667 68.5419 89.5761 69.2044 89.5761 69.9635C89.5761 70.9711 89.1962 71.8132 88.4331 72.4895C87.6699 73.1658 86.6511 73.5006 85.3696 73.5006C83.6658 73.5006 82.3062 72.8518 81.291 71.5612L83.0943 69.653C83.4386 70.0429 83.8398 70.3568 84.3012 70.5985C84.7627 70.84 85.1709 70.9573 85.5294 70.9573C85.9164 70.9573 86.2287 70.8676 86.463 70.6847C86.7009 70.5052 86.818 70.2948 86.818 70.0602C86.818 69.6219 86.392 69.194 85.5401 68.7765L84.5533 68.2968C82.6646 67.3721 81.7205 66.2126 81.7205 64.822C81.7205 63.9248 82.0755 63.1586 82.789 62.5203C83.5025 61.8819 84.4113 61.5645 85.5223 61.5645C86.2819 61.5645 86.9954 61.7266 87.6628 62.051C88.3302 62.3754 88.898 62.8377 89.3631 63.4451" fill="#1D1D1B"/>
                </g>
                <defs>
                  <clipPath id="clip0_1461_2498">
                    <rect width="106" height="74" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </div>

          </div>
        </div>
      </section>
  <?php endif;?>

  <!-- Our team -->
<?php
  $ourTeamBlockTilte = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_team_title'.ua_teens_lang_prefix());
  $ourTeamSubtitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_team_subtitle'.ua_teens_lang_prefix());
  $ourTeamText = carbon_get_post_meta(get_the_ID(),'ua_teens_home_team_text'.ua_teens_lang_prefix());
  $ourTeamPageLink = carbon_get_post_meta(get_the_ID(),'ua_teens_home_team_page_link'.ua_teens_lang_prefix());

	$countWorkers = wp_count_posts( 'team' )->publish;

  if ( $aboutUsBlockTile && $ourTeamPageLink && $countWorkers > 0 ):
?>
  <section class="our-team indent-top-small" id="our-team-anchor">
    <div class="container">
      <div class="row">
        <h2 class="block-title small-title big-margin upper-title col-xl-8 col-lg-9"><?php echo $ourTeamBlockTilte;?></h2>
        <p class="subtitle col-xl-10 col-lg-11"><?php echo $ourTeamSubtitle;?></p>
        <div class="text col-xl-10 col-lg-11"><?php echo wpautop($ourTeamText);?></div>
      </div>
      <div class="row ">
        <div class="our-team__list col-12">
	        <?php
		        $teamArgs = array(
			        'posts_per_page' => 3,
			        'orderby' 	 => 'date',
			        'post_type'  => 'team',
			        'post_status'    => 'publish'
		        );

		        $teamList = new WP_Query( $teamArgs );

		        if ( $teamList->have_posts() ) :

			        while ( $teamList->have_posts() ) : $teamList->the_post();
				        ?>
                <a href="<?php the_permalink();?>" class="our-team__men ">
                  <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                      alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                  >
                  <span class="info">
                      <span class="name"><?php the_title();?></span>
                      <span class="position"><?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_team_men_main_direction'.ua_teens_lang_prefix());?></span>
                    </span>
                </a>

			        <?php endwhile;?>
		        <?php endif; ?>
	        <?php wp_reset_postdata(); ?>
        </div>

      </div>
      <?php if( $countWorkers > 3 ):?>
        <div class="row">
          <div class="col-12 text-center">
            <a href="<?php echo $ourTeamPageLink;?>" class="button orange-btn">
				      <?php echo esc_html( pll__( 'Уся команда' ) ); ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
              </svg>
            </a>
          </div>
        </div>
      <?php endif;?>
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

  <!-- F.A.Q -->
   <?php
   	$faqArgs = array(
   		'posts_per_page' => -1,
   		'orderby' 	 => 'date',
   		'post_type'  => 'faq',
   		'post_status'    => 'publish'
   	);

   	$i = 0;
   	$j = 0;

   	$faqList = new WP_Query( $faqArgs );

   		  if ( $faqList->have_posts() ) :?>
          <section class="our-faq indent-top-small indent-bottom-small" id="faq-anchor">
            <div class="container">
              <div class="row">
                <h2 class="block-title upper-title big-margin small-title col-12 text-center">
                  <?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_home_faq_title'.ua_teens_lang_prefix());;?>
                </h2>
                <p class="subtitle col-12 text-center big-subtitle">
	                <?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_home_faq_subtitle'.ua_teens_lang_prefix());;?>
                </p>
              </div>
              <div class="row">
                <div class="accordion col-12" id="accordion-faq">
                  <div class="left-column">
                    <?php while ( $faqList->have_posts() ) : $faqList->the_post(); $i++;?>

                        <?php if( $i % 2 == 0 ):?>
                          <div class="card">
                            <div class="card-header">
                              <a class="card-link collapsed " data-toggle="collapse" href="#faq<?php the_ID();?>">
                                <svg class="indication indication-pic" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                  <g clip-path="url(#clip0_954_1584)">
                                    <circle cx="16" cy="16" r="15.5" stroke="#F64B0A"/>
                                    <circle class="active" cx="15" cy="15" r="5.5" fill="#F64B0A" stroke="#F64B0A"/>
                                    <path d="M15.6457 9C19.3141 9 22.2913 11.9773 22.2913 15.6457C22.2913 19.3141 19.3141 22.2913 15.6457 22.2913C11.9773 22.2913 9 19.3141 9 15.6457C9 11.9773 11.9773 9 15.6457 9ZM15.6457 20.8145C18.5011 20.8145 20.8145 18.5011 20.8145 15.6457C20.8145 12.7902 18.5011 10.4768 15.6457 10.4768C12.7902 10.4768 10.4768 12.7902 10.4768 15.6457C10.4768 18.5011 12.7902 20.8145 15.6457 20.8145ZM21.911 20.8669L24 22.9552L22.9552 24L20.8669 21.911L21.911 20.8669Z" fill="#F64B0A"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_954_1584">
                                      <rect width="32" height="32" fill="white"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                                <svg class="indication indication-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M6 9L12 15L18 9" stroke="#1D1D1B" stroke-width="3"/>
                                </svg>
                                <?php the_title();?>
                              </a>
                            </div>
                            <div id="faq<?php the_ID();?>" class="collapse" data-parent="#accordion-faq">
                              <div class="card-body">
                                <?php the_content();?>
                              </div>
                            </div>
                          </div>
                        <?php endif;?>

                    <?php endwhile;?>
	                  <?php wp_reset_postdata(); ?>
                  </div>
                  <div class="right-column">
		                <?php while ( $faqList->have_posts() ) : $faqList->the_post(); $j++;?>

			                <?php if( $j % 2 !== 0 ):?>
                        <div class="card">
                          <div class="card-header">
                            <a class="card-link collapsed " data-toggle="collapse" href="#faq<?php the_ID();?>">
                              <svg class="indication indication-pic" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_954_1584)">
                                  <circle cx="16" cy="16" r="15.5" stroke="#F64B0A"/>
                                  <circle class="active" cx="15" cy="15" r="5.5" fill="#F64B0A" stroke="#F64B0A"/>
                                  <path d="M15.6457 9C19.3141 9 22.2913 11.9773 22.2913 15.6457C22.2913 19.3141 19.3141 22.2913 15.6457 22.2913C11.9773 22.2913 9 19.3141 9 15.6457C9 11.9773 11.9773 9 15.6457 9ZM15.6457 20.8145C18.5011 20.8145 20.8145 18.5011 20.8145 15.6457C20.8145 12.7902 18.5011 10.4768 15.6457 10.4768C12.7902 10.4768 10.4768 12.7902 10.4768 15.6457C10.4768 18.5011 12.7902 20.8145 15.6457 20.8145ZM21.911 20.8669L24 22.9552L22.9552 24L20.8669 21.911L21.911 20.8669Z" fill="#F64B0A"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_954_1584">
                                    <rect width="32" height="32" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                              <svg class="indication indication-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="#1D1D1B" stroke-width="3"/>
                              </svg>
							                <?php the_title();?>
                            </a>
                          </div>
                          <div id="faq<?php the_ID();?>" class="collapse" data-parent="#accordion-faq">
                            <div class="card-body">
							                <?php the_content();?>
                            </div>
                          </div>
                        </div>
			                <?php endif;?>

		                <?php endwhile;?>
		                <?php wp_reset_postdata(); ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
   	<?php endif; ?>
   <?php wp_reset_postdata(); ?>


<?php get_template_part('template-parts/block-contacts');?>

	<!--<section class="contact-form">

		<div id="plumsail-form-jh19"><div class="fd-form-loading"></div></div>

	</section>-->
<?php get_footer();
