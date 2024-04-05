<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action( 'wp_enqueue_scripts', 'ua_teens_ajax_data', 99 );
	function ua_teens_ajax_data(){

		wp_localize_script('ua-teens-main-js', 'ua_teens_ajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);

	}

	/**
	 * Student works home
	 */

	add_action('wp_ajax_student_works_change_cat', 'student_works_change_cat_callback');
	add_action('wp_ajax_nopriv_student_works_change_cat', 'student_works_change_cat_callback');

	function student_works_change_cat_callback(){

		$catId = $_POST['catId'];

		$studentWorksArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'student_works-tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'student_works',
			'orderby' 	 => 'date',
			'suppress_filters' => false,
			'lang' => false,
			'posts_per_page' => -1
		);

		$studentWorksList = new WP_Query( $studentWorksArgs );

		if ( $studentWorksList->have_posts() ) :?>

			<?php	while ( $studentWorksList->have_posts() ) : $studentWorksList->the_post();
				?>
				<div class="slide">
            <?php
                $workMediaPart = carbon_get_post_meta(get_the_ID(), 'ua_teens_stydent_works_content_type'.ua_teens_lang_prefix());
	              $workImage = carbon_get_post_meta(get_the_ID(), 'ua_teens_stydent_works_image'.ua_teens_lang_prefix());
                $workVideoId = carbon_get_post_meta(get_the_ID(), 'ua_teens_stydent_works_video_id'.ua_teens_lang_prefix());
                $workVideoPreview = carbon_get_post_meta(get_the_ID(), 'ua_teens_stydent_works_video_preview'.ua_teens_lang_prefix());
                $workMediaGallery = carbon_get_post_meta(get_the_ID(), 'ua_teens_stydent_works_image_list'.ua_teens_lang_prefix());
	              $workMediaAudio = carbon_get_post_meta(get_the_ID(), 'ua_teens_stydent_works_audio'.ua_teens_lang_prefix());
            ?>
					<?php if ( $workMediaPart == 'image' ):?>
            <div class="media-part">

                <a href="<?php echo wp_get_attachment_image_src($workImage, 'full')[0];?>" data-fancybox="student-gallery<?php the_ID();?>">
                  <img
                      src="<?php echo wp_get_attachment_image_src($workImage, 'full')[0];?>"
                      alt="<?php echo get_post_meta($workImage, '_wp_attachment_image_alt', TRUE);?>"
                  >
                </a>

                <?php if( $workMediaGallery ):?>
                      <?php foreach( $workMediaGallery as $innerGallery ):?>
                    <a href="<?php echo wp_get_attachment_image_src($innerGallery['image'], 'full')[0];?>" class="gallery" data-fancybox="student-gallery<?php the_ID();?>">
                      <!--<img
                          src="<?php /*echo wp_get_attachment_image_src($innerGallery, 'full')[0];*/?>"
                          alt="<?php /*echo get_post_meta($innerGallery, '_wp_attachment_image_alt', TRUE);*/?>"
                      >-->
                    </a>
                      <?php endforeach;?>
                <?php endif;?>
                </div>
                <div class="text-part">
                  <p class="name"><?php the_title();?></p>
                  <div class="text"><?php the_content();?></div>
                </div>


            <?php endif;?>
          <?php if( $workMediaPart == 'video' ):?>
            <div class="media-part">
                <div class="preview" >
                  <img
                      src="<?php echo wp_get_attachment_image_src($workVideoPreview, 'full')[0];?>"
                      alt="<?php echo get_post_meta($workVideoPreview, '_wp_attachment_image_alt', TRUE);?>"
                  >
                  <button class="play" data-videoid="<?php echo $workVideoId;?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                      <path d="M31.9999 5.3335C26.7258 5.3335 21.57 6.89747 17.1847 9.82764C12.7994 12.7578 9.38148 16.9226 7.36314 21.7953C5.34481 26.668 4.81672 32.0297 5.84566 37.2026C6.8746 42.3754 9.41435 47.1269 13.1438 50.8563C16.8732 54.5857 21.6247 57.1255 26.7975 58.1544C31.9704 59.1834 37.3321 58.6553 42.2048 56.637C47.0775 54.6186 51.2423 51.2007 54.1725 46.8154C57.1026 42.4301 58.6666 37.2743 58.6666 32.0002C58.6666 28.4982 57.9768 25.0306 56.6367 21.7953C55.2966 18.5599 53.3323 15.6202 50.8561 13.144C48.3799 10.6678 45.4402 8.7035 42.2048 7.36338C38.9695 6.02325 35.5018 5.3335 31.9999 5.3335ZM26.6666 44.0002V20.0002L42.6666 32.0002L26.6666 44.0002Z" fill="#F8F8F8"/>
                    </svg>
                  </button>
                </div>

            </div>
            <div class="text-part">
              <p class="name"><?php the_title();?></p>
              <div class="text"><?php the_content();?></div>
            </div>
          <?php endif;?>
          <?php if ( $workMediaPart == 'audio'):?>
            <div class="audio-part">
              <iframe width="100%" height="166" src="<?php echo $workMediaAudio;?>" frameborder="no" scrolling="no" ></iframe>
            </div>
          <?php endif;?>
				</div>
			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}

	/**
   * Model modal
   */

	add_action('wp_ajax_model_modal', 'model_modal_callback');
	add_action('wp_ajax_nopriv_model_modal', 'model_modal_callback');

	function model_modal_callback(){

    $modalTitle = $_POST['title'];
	  $modalDescription = $_POST['description'];
	  $modalQuote = $_POST['quote'];
	  $modalImage = $_POST['image'];
	  $modalText = $_POST['text'];
	  ?>
      <div class="left-column">
        <h2 class="block-title small-title small-margin"><?php echo $modalTitle;?></h2>
        <p class="subtitle small-subtitle"><?php echo $modalDescription;?></p>
        <p class="quote"><?php echo $modalQuote;?></p>
        <div class="bg-image">
          <svg class="wotermark-logo" width="590" height="286" viewBox="0 0 590 286" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.25" clip-path="url(#clip0_212_5155)">
              <path d="M296.683 286H0V0H32.9469V254.201H263.696V0H296.643V286H296.683ZM230.749 222.44H65.934V0H98.8809V190.641H197.762V0H230.709V222.44H230.749ZM164.815 0V158.88H131.868V0H164.815Z" fill="#F64B0A"/>
              <path d="M628 31.7606H496.132V286H463.185V31.7606H331.317V0H628V31.7606ZM430.238 285.961H397.291V95.3204H331.357V63.5599H430.238V286V285.961ZM364.304 127.081V285.961H331.357V127.12H364.304V127.081ZM628 95.3204H562.066V285.961H529.119V63.5599H628V95.3204ZM628 127.081V285.961H595.053V127.12H628V127.081Z" fill="#F64B0A"/>
            </g>
            <defs>
              <clipPath id="clip0_212_5155">
                <rect width="628" height="286" fill="white"/>
              </clipPath>
            </defs>
          </svg>
        </div>


      </div>
      <div class="right-column">
        <div class="text"><?php echo $modalText;?></div>
        <div class="image">
          <img
              src="<?php echo wp_get_attachment_image_src($modalImage, 'full')[0];?>"
              alt="<?php echo get_post_meta($modalImage, '_wp_attachment_image_alt', TRUE);?>"
          >
        </div>
      </div>

		<?php wp_reset_postdata();

		wp_die();
	}

	/**
   * Team direction change
   */

	add_action('wp_ajax_change_team_direction', 'change_team_direction_callback');
	add_action('wp_ajax_nopriv_change_team_direction', 'change_team_direction_callback');

	function change_team_direction_callback(){

		$catId = $_POST['catId'];

		if ( $catId == 0 ):?>
			<?php
			$teamArgs = array(
				'posts_per_page' => -1,
				'orderby' 	 => 'date',
				'post_type'  => 'team',
				'post_status'    => 'publish'
			);

			$teamList = new WP_Query( $teamArgs );

			if ( $teamList->have_posts() ) :

				while ( $teamList->have_posts() ) : $teamList->the_post();
					?>
          <a href="<?php the_permalink();?>" target="_blank" class="team-men">
            <img
                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
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
      <?php else:?>
      <?php
			$teamArgs = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'team-tax',
						'field' => 'id',
						'lang' => false,
						'suppress_filters' => false,
						'terms' => $catId

					)
				),
				'post_type' => 'team',
				'orderby' 	 => 'date',
				'suppress_filters' => false,
				'lang' => false,
				'posts_per_page' => -1
			);

			$teamList = new WP_Query( $teamArgs );

			if ( $teamList->have_posts() ) :

				while ( $teamList->have_posts() ) : $teamList->the_post();
        ?>
          <a href="<?php the_permalink();?>" target="_blank" class="team-men">
            <img
                src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
            >
            <span class="info">
                      <span class="name"><?php the_title();?></span>
                      <span class="position"><?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_team_men_main_direction'.ua_teens_lang_prefix());?></span>
                    </span>
          </a>
				<?php endwhile;?>
			<?php endif; ?>
      <?php endif;?>



    <?php

		wp_die();
	}

	/**
	 * Form integration
	 */

	add_action('wp_ajax_form_integration', 'form_integration_callback');
	add_action('wp_ajax_nopriv_form_integration', 'form_integration_callback');

	function form_integration_callback(){

		$name = $_POST['name'];
		$lastName = $_POST['lastName'];
		$pageName = $_POST['pageName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$birthday = $_POST['birthday'];
		$utmSource= $_POST['utmSource'];
		$utmMedium = $_POST['utmMedium'];
		$utmCampaign = $_POST['utmCampaign'];
		$utmTerm = $_POST['utmTerm'];
		$utmContent = $_POST['utmContent'];
		$message = $_POST['message'];

		$post_data_gsth = array (
			'Імʼя' => $name,
			'Прізвище' => $lastName,
			'Телефон для звʼязку по заявці'  => $phone,
			'Повна дата народження тинейджера' => $birthday,

		);

			$chanelGsth = curl_init();

			curl_setopt($chanelGsth, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbxW7FMe9gB0SNRUeF3I1Ou3EsOkyAXouh_mPMzRiPlDe6FqxESEf_hDgYQfu-gfOrx5/exec');
		  /*curl_setopt($chanelGsth, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbzIrBsR6xJaH-dodAyAqaUFwDxLQNAI5C9riAQaaX9JzG-XkicHc50nVV6jFb96jL33CA/exec');*/
			curl_setopt($chanelGsth, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($chanelGsth, CURLOPT_POST, 1);
			curl_setopt($chanelGsth, CURLOPT_POSTFIELDS, $post_data_gsth);

			$output = curl_exec($chanelGsth);

			curl_close($chanelGsth);

		wp_die();

	}

	/**
   * Form CEO
   */


	add_action('wp_ajax_form_seo', 'form_seo_callback');
	add_action('wp_ajax_nopriv_form_seo', 'form_seo_callback');

	function form_seo_callback(){
		$name = $_POST['name'];
		$lastName = $_POST['lastName'];
		$phone = $_POST['phone'];
		$mess = $_POST['message'];


		$to = 'tumo.kyiv@gmail.com';
		$headers = "Content-type: text/plain; charset = windows-1251";
		$subject = 'Звертання з офлайн проекту у Львові';
		$message = "Імʼя: $name \n Прізвище: $lastName \n Номер телефону: $phone \n ПовідомленняЖ $mess \n ";

		$send = mail ($to, $subject, $message);

		wp_die();

	}

	/**
	 * Form Page integration
	 */

	add_action('wp_ajax_form_page_integration', 'form_page_integration_callback');
	add_action('wp_ajax_nopriv_form_page_integration', 'form_page_integration_callback');

	function form_page_integration_callback(){

		$name = $_POST['name'];
		$lastName = $_POST['lastName'];
		$pageName = $_POST['pageName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$birthday = $_POST['birthday'];
		$utmSource= $_POST['utmSource'];
		$utmMedium = $_POST['utmMedium'];
		$utmCampaign = $_POST['utmCampaign'];
		$utmTerm = $_POST['utmTerm'];
		$utmContent = $_POST['utmContent'];
		$message = $_POST['message'];

		$post_data_gsth = array (
			'Імʼя' => $name,
			'Прізвище' => $lastName,
			'Телефон для звʼязку по заявці'  => $phone,
			'Повна дата народження тинейджера' => $birthday,
      'Пошта' => $email

		);

		$chanelGsth = curl_init();

		curl_setopt($chanelGsth, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbygrjIUlbD4gfnJ0aOFah-aTttn8IAZ6f0A7gIW0eCTtuYOoaf9K8mcevkb8sHu6rBY/exec');
		/*curl_setopt($chanelGsth, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbzIrBsR6xJaH-dodAyAqaUFwDxLQNAI5C9riAQaaX9JzG-XkicHc50nVV6jFb96jL33CA/exec');*/
		curl_setopt($chanelGsth, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($chanelGsth, CURLOPT_POST, 1);
		curl_setopt($chanelGsth, CURLOPT_POSTFIELDS, $post_data_gsth);

		$output = curl_exec($chanelGsth);

		curl_close($chanelGsth);

		wp_die();

	}




