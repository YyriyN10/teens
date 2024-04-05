<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template program
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 */
	get_header();?>

	<!-- Main screen -->
<?php
	$programMainScreenCall = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_main_screen_call'.ua_teens_lang_prefix());
	$programMainScreenPic = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_main_screen_pic'.ua_teens_lang_prefix());
	$programMainScreenBtnLink = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_main_screen_btn_link'.ua_teens_lang_prefix());

	if ( $programMainScreenPic  ):
?>
	<section class="program-main-screen" style="background-image: url(<?php the_post_thumbnail_url();?>)">
	  <div class="container">
	    <div class="row content">
		    <div class="pic-wrapper col-xl-4 col-lg-5 col-6">
			    <img
				    src="<?php echo wp_get_attachment_image_src($programMainScreenPic, 'full')[0];?>"
				    alt="<?php echo get_post_meta($programMainScreenPic, '_wp_attachment_image_alt', TRUE);?>"
			    >
		    </div>
		    <div class="text-content col-xl-8 col-lg-7">
			    <h1 class="page-title block-title big-title big-margin upper-title"><?php the_title();?></h1>
			    <p class="subtitle big-subtitle"><?php echo $programMainScreenCall;?></p>
			    <a href="#" rel="nofollow" class="button orange-btn modification" data-toggle="modal" data-target="#innerPageFormModal">
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

	<!-- Для кого -->
<?php
	$forWhomBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_for_whom_block_title'.ua_teens_lang_prefix());
	$forWhomList = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_for_whom_list'.ua_teens_lang_prefix());

	if ( $forWhomBlockTitle && $forWhomList ):
?>
	<section class="for-whom indent-top-small indent-bottom-small animation-tracking">
	  <div class="container">
	    <div class="row first-up">
	      <h2 class="block-title col-12 text-center small-title large-margin upper-title"><?php echo $forWhomBlockTitle;?></h2>
	    </div>
	    <div class="row second-up">
	      <div class="for-whom__slider-wrapper col-12">
		      <div class="for-whom__slider" id="for-whom-slider">
			      <?php foreach( $forWhomList as $item ):?>
				      <div class="slide">
					      <div class="pic-wrapper">
						      <img
							      src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
							      alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
						      >
					      </div>
					      <div class="text-wrapper">
						      <h3 class="name"><?php echo $item['name'];?></h3>
						      <p class="description"><?php echo $item['description'];?></p>
					      </div>
				      </div>
			      <?php endforeach;?>
		      </div>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

  <!-- Яка мета-->
<?php
  $whatPurposeBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_what_purpose_block_title'.ua_teens_lang_prefix());
	$whatPurposeImage = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_what_purpose_image'.ua_teens_lang_prefix());
	$whatPurposeText= carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_what_purpose_text'.ua_teens_lang_prefix());

	if ( $whatPurposeBlockTitle && $whatPurposeImage && $whatPurposeText ):
?>
  <section class="what-purpose indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row">
        <div class="text-wrapper col-lg-7 first-up">
          <h2 class="block-title upper-title big-title big-margin"><?php echo $whatPurposeBlockTitle;?></h2>
          <div class="text"><?php echo wpautop( $whatPurposeText );?></div>
        </div>
        <div class="pic-wrapper col-lg-5 second-up">
          <img
              class="lazy"
              data-src="<?php echo wp_get_attachment_image_src($whatPurposeImage, 'full')[0];?>"
              alt="<?php echo get_post_meta($whatPurposeImage, '_wp_attachment_image_alt', TRUE);?>"
          >
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Програми в яких працюємо -->
<?php
  $weWorkInBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_we_work_in_block_title'.ua_teens_lang_prefix());
	$weWorkInLearning = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_we_work_in_learning'.ua_teens_lang_prefix());
	$weWorkInWorkshop = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_we_work_in_workshop'.ua_teens_lang_prefix());

	if ( $weWorkInBlockTitle && $weWorkInLearning && $weWorkInWorkshop ):
?>
  <section class="we-work-in indent-top-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title upper-title col-12 text-center small-title large-margin"><?php echo $weWorkInBlockTitle;?></h2>
      </div>
      <div class="row second-up">
        <div class="content col-12">
          <div class="inner indent-top-small indent-bottom-small text-center">
            <h3 class="direction">#<?php echo esc_html( pll__( 'НА WORKSHOPS' ) ); ?></h3>
            <div class="program-list">
              <?php foreach( $weWorkInWorkshop as $itemWorkshop ):?>
                <div class="item">
                  <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src($itemWorkshop['image'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($itemWorkshop['image'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              <?php endforeach;?>
            </div>
            <h3 class="direction">#<?php echo esc_html( pll__( 'НА SELF-LEARNING' ) ); ?></h3>
            <div class="program-list">
              <?php foreach( $weWorkInLearning as $itemLearning ):?>
                <div class="item">
                  <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src($itemLearning['image'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($itemLearning['image'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Студент знатиме -->
<?php
  $studentWilKnowBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_wil_know_block_title'.ua_teens_lang_prefix());
	$studentWilKnowList= carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_wil_know_list'.ua_teens_lang_prefix());
	$i = 0;

	if ($studentWilKnowBlockTitle && $studentWilKnowList ):
?>
  <section class="student-wil-know indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title col-12 text-center small-title large-margin upper-title"><?php echo $studentWilKnowBlockTitle;?></h2>
      </div>
      <div class="row second-up">
        <ul class="student-wil-know__list col-12">
          <?php foreach( $studentWilKnowList as $item ): $i++;?>
            <li class="student-wil-know__item">
              <p class="pretty-number">
                <?php if( $i < 10 ):?>
                  0<?php echo $i;?>
                <?php else:?>
                  <?php echo $i;?>
                <?php endif;?>

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <path d="M30 16L20 10.2265V21.7735L30 16ZM4 17L21 17V15L4 15V17Z" fill="#1D1D1B"/>
                </svg>
              </p>
              <p class="subtitle small-subtitle"><?php echo $item['text'];?></p>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Студент вмітиме -->
<?php
  $studentCanBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_can_block_title'.ua_teens_lang_prefix());
	$studentCanList= carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_can_list'.ua_teens_lang_prefix());

	if ( $studentCanBlockTitle && $studentCanList ):
?>
  <section class="student-can indent-top-small indent-bottom-big animation-tracking">
    <div class="container">
      <div class="row">
        <div class="left-part col-lg-6 first-up">
          <h2 class="block-title big-title large-margin upper-title"><?php echo $studentCanBlockTitle;?></h2>
          <a href="#" rel="nofollow" class="button orange-btn" data-toggle="modal" data-target="#innerPageFormModal">
            <?php echo esc_html( pll__( 'Безкоштовне заняття' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
            </svg>
          </a>
        </div>
        <ul class="right-part student-can__list col-lg-6 second-up">
          <?php foreach( $studentCanList as $item ):?>
            <li class="student-can__item">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <circle opacity="0.2" cx="16" cy="16" r="15" fill="#F64B0A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9998 27C17.9869 27.0002 19.9368 26.462 21.6426 25.4428C23.3483 24.4235 24.7461 22.9611 25.6874 21.2111C26.6288 19.461 27.0785 17.4887 26.9888 15.5035C26.8991 13.5184 26.2734 11.5946 25.1781 9.93656L16.4337 19.6532C16.0252 20.1072 15.4617 20.3918 14.8539 20.4511C14.2462 20.5103 13.6382 20.3399 13.1498 19.9734L9.15587 16.9778C8.89656 16.7833 8.72513 16.4937 8.67929 16.1728C8.63346 15.852 8.71696 15.526 8.91144 15.2667C9.10592 15.0073 9.39544 14.8359 9.71631 14.7901C10.0372 14.7442 10.3631 14.8277 10.6224 15.0222L14.6164 18.0179L23.5942 8.04333C22.2936 6.80169 20.7085 5.89785 18.9776 5.41094C17.2467 4.92403 15.4228 4.86891 13.6657 5.2504C11.9086 5.63189 10.2718 6.43836 8.89857 7.59919C7.52538 8.76003 6.45768 10.2398 5.78898 11.909C5.12027 13.5782 4.87093 15.3859 5.06281 17.1738C5.25468 18.9618 5.88192 20.6754 6.88959 22.1646C7.89725 23.6539 9.25463 24.8734 10.8429 25.7164C12.4311 26.5594 14.2018 27.0001 15.9998 27Z" fill="#F64B0A"/>
              </svg>
              <span><?php echo $item['text'];?></span>
            </li>
          <?php endforeach;?>
          <a href="" class="button orange-btn">
		        <?php echo esc_html( pll__( 'Безкоштовне заняття' ) ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
            </svg>
          </a>
        </ul>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Портфоліо студнта -->
<?php
  $studentPortfolioBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_portfolio_block_title'.ua_teens_lang_prefix());
	$studentPortfolioList = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_portfolio_list'.ua_teens_lang_prefix());

	if ( $studentPortfolioBlockTitle && $studentPortfolioList ):
?>
  <section class="student-portfolio indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title col-12 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center upper-title small-margin large-margin"><?php echo $studentPortfolioBlockTitle;?></h2>
      </div>
      <div class="row second-up">
        <ul class="student-portfolio__list col-12">
          <?php foreach( $studentPortfolioList as $item ):?>
            <li class="student-portfolio__item">
              <div class="title">
                <p class="level">
                  <span class="pretty-number"><?php echo $item['level'];?></span>
                  <span class="text"><?php echo esc_html( pll__( 'рівень' ) ); ?></span>
                </p>
                <svg class="pic" xmlns="http://www.w3.org/2000/svg" width="180" height="196" viewBox="0 0 180 196" fill="none">
                  <g filter="url(#filter0_d_652_546)">
                    <path d="M90.0941 18.446C87.9218 17.4936 85.7824 18.1599 84.4061 19.5615C83.0691 20.9231 82.4005 23.0011 82.8693 25.0963C83.6092 28.4034 84 31.844 84 35.3781C84 43.447 81.9664 49.0983 78.4672 53.7831C74.9102 58.5455 69.7611 62.4226 63.26 66.7973C63.1578 66.8661 63.0626 66.9447 62.9758 67.0322L62.1884 67.8256C48.2396 76.8373 39 92.5281 39 110.378C39 138.338 61.6656 161.003 89.625 161.003C117.584 161.003 140.25 138.338 140.25 110.378C140.25 102.169 138.295 94.4111 134.823 87.5499C134.54 86.9917 133.998 86.6112 133.377 86.5353C132.756 86.4595 132.138 86.6983 131.73 87.172C131.201 87.7852 130.683 88.3903 130.173 88.9865C123.586 96.6829 118.27 102.894 107.371 105.668C106.908 105.786 106.62 105.699 106.416 105.571C106.175 105.421 105.912 105.121 105.732 104.642C105.356 103.643 105.517 102.37 106.287 101.535C112.116 95.216 116.257 86.6376 117.736 74.4342C120.508 51.5749 110.119 27.2255 90.0941 18.446Z" fill="#F64B0A"/>
                  </g>
                  <defs>
                    <filter id="filter0_d_652_546" x="30" y="17" width="137.25" height="179.003" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feMorphology radius="10" operator="erode" in="SourceAlpha" result="effect1_dropShadow_652_546"/>
                      <feOffset dx="9" dy="17"/>
                      <feGaussianBlur stdDeviation="14"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.829167 0 0 0 0 0.331008 0 0 0 0 0.141649 0 0 0 0.34 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_652_546"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_652_546" result="shape"/>
                    </filter>
                  </defs>
                </svg>
              </div>
              <div class="text-content">
                <h3 class="name"><?php echo $item['title'];?></h3>
                <?php if( $item['text'] ):?>
                  <p class="description"><?php echo $item['text'];?></p>
                <?php endif;?>
              </div>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Student works -->
<?php
	$countWorks = wp_count_posts( 'student_works' )->publish;

	$worksCategory = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_student_works'.ua_teens_lang_prefix());

	$categoryItem = [];

	foreach ($worksCategory as $item ){
		array_push($categoryItem, $item['id']);
  }

	if ( $countWorks > 0 && $worksCategory ):
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
                  'include' => $categoryItem
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

  <!-- Перспективи -->
<?php
  $prospectsBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_prospects_block_title'.ua_teens_lang_prefix());
	$prospectsImage = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_prospects_image'.ua_teens_lang_prefix());
	$prospectsList = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_prospects_list'.ua_teens_lang_prefix());

	if ( $prospectsBlockTitle && $prospectsImage && $prospectsList ):
?>
  <section class="prospects indent-top-small indent-bottom-small animation-tracking">
    <div class="container">
      <div class="row first-up">
        <h2 class="block-title col-12 small-title large-margin upper-title"><?php echo $prospectsBlockTitle;?></h2>
      </div>
      <div class="row content second-up">
        <ul class="prospects__list col-xl-4 col-lg-5">
          <?php foreach( $prospectsList as $item ):?>
            <li class="prospects__item">
              <div class="icon">
                <img src="<?php echo $item['image'];?>" alt="" class="svg-pic">
              </div>
              <h3 class="name"><?php echo $item['title'];?></h3>
              <p class="description"><?php echo $item['text'];?></p>
            </li>
          <?php endforeach;?>
        </ul>
        <div class="image-wrapper col-xl-8 col-lg-7">
          <img
              class="lazy"
              data-src="<?php echo wp_get_attachment_image_src($prospectsImage, 'full')[0];?>"
              alt="<?php echo get_post_meta($prospectsImage, '_wp_attachment_image_alt', TRUE);?>"
          >
        </div>
      </div>
    </div>
  </section>
<?php endif;?>

  <!-- Our programs -->
<?php
	$ourProgramsBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_program_block_title'.ua_teens_lang_prefix());
	$ourProgramsSubTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_program_subtitle'.ua_teens_lang_prefix());
	$ourProgramsText = carbon_get_post_meta(get_the_ID(), 'ua_teens_home_program_text'.ua_teens_lang_prefix());
	$ourProgramsList = carbon_get_post_meta(get_the_ID(), 'ua_teens_page_program_program_list'.ua_teens_lang_prefix());
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

<?php get_template_part('template-parts/block-contacts');?>
  
<?php get_footer();
