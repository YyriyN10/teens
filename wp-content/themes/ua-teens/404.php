<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ua-teens
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

get_header();
?>



		<section class="error-404 not-found">
      <div class="container-fluid">
        <div class="row">
          <div class="content text-center col-12">
            <div class="block-pic"><img src="<?php echo THEME_PATH;?>/assets/img/pic-404.png" alt=""></div>
            <h2><?php echo esc_html( pll__( 'УПС... щось не те...' ) ); ?></h2>
            <p><?php echo esc_html( pll__( 'Сторінка, на яку ви намагаєтесь перейти, не існує...' ) ); ?></p>
            <a href="<?php echo get_home_url('/');?>" class="button orange-btn">
              <?php echo esc_html( pll__( 'Повернутись на головну' ) ); ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="#F9F9F9"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

		</section>



<?php
get_footer();
