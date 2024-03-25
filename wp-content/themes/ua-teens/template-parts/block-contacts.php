<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<!-- Contacts -->
<section class="our-contacts indent-top-small indent-bottom-big animation-tracking">
  <div class="container">
    <div class="row">
      <div class="map-wrapper col-lg-6 first-up">
        <div class="inner">
          <h3 class="our-contacts__item-title"><?php echo esc_html( pll__( 'Де ми знаходимось?' ) ); ?></h3>
          <div class="our-contacts__items">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M8.75 10C8.75 8.20507 10.2051 6.75 12 6.75C13.7949 6.75 15.25 8.20507 15.25 10C15.25 11.7949 13.7949 13.25 12 13.25C10.2051 13.25 8.75 11.7949 8.75 10Z" fill="#F64B0A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.77354 8.87739C4.11718 4.70845 7.60097 1.5 11.7841 1.5H12.216C16.3991 1.5 19.8829 4.70845 20.2265 8.87739C20.4115 11.122 19.7182 13.3508 18.2925 15.0943L13.4995 20.9561C12.7245 21.9039 11.2756 21.9039 10.5006 20.9561L5.70752 15.0943C4.28187 13.3508 3.58852 11.122 3.77354 8.87739ZM12 5.25C9.37665 5.25 7.25 7.37665 7.25 10C7.25 12.6234 9.37665 14.75 12 14.75C14.6234 14.75 16.75 12.6234 16.75 10C16.75 7.37665 14.6234 5.25 12 5.25Z" fill="#F64B0A"/>
              </svg>
              <span><?php echo carbon_get_theme_option('ua_teens_address'.ua_teens_lang_prefix());?></span>
            </p>
	          <?php get_template_part('template-parts/phone');?>
            <a href="mailto:<?php echo antispambot(carbon_get_theme_option('ua_teens_email'), 1);?>" rel="nofollow" class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7.289 4.90749C10.4236 4.635 13.576 4.635 16.7106 4.90749L18.2209 5.03877C19.2263 5.12617 20.0873 5.72584 20.5335 6.58361C20.5905 6.69335 20.5478 6.82621 20.4426 6.89132L14.1766 10.7702C12.8328 11.6022 11.1383 11.6196 9.77753 10.8156L3.46971 7.0882C3.3678 7.02798 3.32102 6.90402 3.36695 6.79492C3.7751 5.82536 4.69273 5.13318 5.77877 5.03877L7.289 4.90749Z" fill="#F64B0A"/>
                <path d="M3.36181 8.76676C3.20585 8.6746 3.00685 8.77377 2.98867 8.95402C2.73493 11.4697 2.79634 14.0091 3.1729 16.5132C3.37141 17.8333 4.44882 18.8454 5.77877 18.961L7.289 19.0923C10.4236 19.3647 13.576 19.3647 16.7107 19.0923L18.2209 18.961C19.5508 18.8454 20.6282 17.8333 20.8268 16.5132C21.2143 13.9361 21.268 11.3216 20.988 8.73415C20.9684 8.55264 20.766 8.45529 20.6107 8.55139L14.9662 12.0456C13.148 13.1712 10.8554 13.1948 9.01444 12.1069L3.36181 8.76676Z" fill="#F64B0A"/>
              </svg>
              <span><?php echo antispambot(carbon_get_theme_option('ua_teens_email'));?></span>
            </a>
          </div>
        </div>
	      <?php
		      $mapCoords = carbon_get_theme_option('ua_teens_map');

		      if ( $mapCoords ):
			      ?>
                <div class="map" id="map" data-lat="<?php echo $mapCoords['lat'];?>" data-lng="<?php echo $mapCoords['lng'];?>"></div>
		      <?php endif;?>
      </div>
      <div class="form-wrapper col-lg-6 second-up" id="contact-form">
        <div class="inner">
          <h3 class="our-contacts__item-title"><?php echo esc_html( pll__( 'Залишились питання?' ) ); ?></h3>
          <p class="subtitle small-subtitle"><?php echo esc_html( pll__( 'Залиште заявку і наш менеджер зв’яжеться з вами' ) ); ?></p>
          <div class="form-container">


            <div id="plumsail-form-1efs"><div class="fd-form-loading"></div></div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
