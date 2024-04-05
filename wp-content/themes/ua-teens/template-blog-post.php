<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template post
	 *
	 * Template post type: blog
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 */

	get_header();?>
	<!-- Головний екран статті -->
	<section class="post-main-screen">
	  <div class="container">
	    <div class="row">
	      <h1 class="block-title small-title upper-title col-xl-10 offset-xl-1 offset-0 col-12 text-center">
		      <?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_format_title'.ua_teens_lang_prefix());?>
	      </h1>
	    </div>
	  </div>
		<div class="pic-wrapper">
			<img
				src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
				alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
			>
		</div>
	</section>

	<!-- Головна цитата -->
<?php
	$mainQuote = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_main_quote'.ua_teens_lang_prefix());

	if ( $mainQuote ):
?>
	<section class="main-quote indent-top-small indent-bottom-small">
	  <div class="container">
	    <div class="row">
	      <p class="subtitle samall-subtitle col-xl-8 col-lg-9 col-md-10 col-sm-11 col-12 offset-xl-4 offset-lg-3 offset-md-2 col-sm-1 offet-0">
					<?php echo $mainQuote;?>
	      </p>
	    </div>
	  </div>
	</section>
<?php endif;?>

	<!-- Блок з великим заголовком текстом та відео -->
<?php
	$postBlockVideoTextTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_large_title'.ua_teens_lang_prefix());
	$postBlockVideoTextMainText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_large_text'.ua_teens_lang_prefix());
	$postBlockVideoTextVideo = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_video'.ua_teens_lang_prefix());
	$postBlockVideoTextVideoText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_video_text'.ua_teens_lang_prefix());

	if ($postBlockVideoTextTitle || $postBlockVideoTextMainText || $postBlockVideoTextVideo || $postBlockVideoTextVideoText):
?>
	<section class="post-block-video-text">
		<?php if( $postBlockVideoTextTitle || $postBlockVideoTextMainText ):?>
			<div class="text-part indent-top-small indent-bottom-small">
				<div class="container">
					<div class="row">
						<?php if( $postBlockVideoTextTitle ):?>
							<h2 class="block-title small-title upper-title large-margin col-12"><?php echo $postBlockVideoTextTitle;?></h2>
						<?php endif;?>
						<?php if( $postBlockVideoTextMainText ):?>
							<div class="text col-12">
								<?php echo wpautop($postBlockVideoTextMainText);?>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		<?php endif;?>
		<?php if( $postBlockVideoTextVideo ):?>
			<div class="video-part indent-bottom-small indent-top-small">
				<div class="container">
					<div class="row">
						<div class="video-wrapper col-12">
							<div class="youtube" id="<?php echo $postBlockVideoTextVideo;?>"></div>
						</div>
						<?php if( $postBlockVideoTextVideoText ):?>
							<p class="col-12 text-center"><?php echo $postBlockVideoTextVideoText;?></p>
						<?php endif;?>
					</div>
				</div>
			</div>
		<?php endif;?>
	</section>
<?php endif;?>

	<!-- Блок з малим заголовком по центру та текстом -->
<?php
	$postBlockSmallTitleBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_small_title'.ua_teens_lang_prefix());
	$postBlockSmallTitleText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_mall_text'.ua_teens_lang_prefix());

	if ( $postBlockSmallTitleBlockTitle || $postBlockSmallTitleText ):
?>
	<section class="post-block-small-title indent-top-small indent-bottom-small">
	  <div class="container">
	    <div class="row">
		    <?php if( $postBlockSmallTitleBlockTitle ):?>
			    <h2 class="title text-center col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0"><?php echo $postBlockSmallTitleBlockTitle;?></h2>
		    <?php endif;?>
		    <?php if( $postBlockSmallTitleText ):?>
			    <div class="text col-12">
				    <?php echo wpautop($postBlockSmallTitleText);?>
			    </div>
		    <?php endif;?>
	    </div>
	  </div>
	</section>
<?php endif;?>

	<!-- Блок з текстом та зображенням -->
<?php
	$postBlockTextImageTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_text_image_title'.ua_teens_lang_prefix());
	$postBlockTextImageText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_text_image_text'.ua_teens_lang_prefix());
	$postBlockTextImagePic = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_text_image_image'.ua_teens_lang_prefix());

	if ( $postBlockTextImageTitle || $postBlockTextImageText || $postBlockTextImagePic ):
?>
	<section class="post-block-text-image indent-top-small indent-bottom-small">
	  <div class="container">
	    <div class="row">
		    <?php if( $postBlockTextImageText || $postBlockTextImageTitle ):?>
			    <div class="text-content col-lg-6">
				    <?php if( $postBlockTextImageTitle ):?>
					    <h2 class="title"><span><?php echo $postBlockTextImageTitle;?></span></h2>
				    <?php endif;?>
				    <?php if( $postBlockTextImageText ):?>
					    <div class="text-content"><?php echo wpautop($postBlockTextImageText);?></div>
				    <?php endif;?>
			    </div>
		    <?php endif;?>
		    <?php if( $postBlockTextImagePic ):?>
			    <div class="pic-wrapper col-lg-6">
				    <img
					    class="lazy"
					    data-src="<?php echo wp_get_attachment_image_src($postBlockTextImagePic, 'full')[0];?>"
					    alt="<?php echo get_post_meta($postBlockTextImagePic, '_wp_attachment_image_alt', TRUE);?>"
				    >
			    </div>
		    <?php endif;?>
	    </div>
	  </div>
	</section>
<?php endif;?>

	<!-- Блок з двокольоровим заголовком та текстом -->
<?php
	$postBlockColorTitleBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_color_title_text_title'.ua_teens_lang_prefix());
	$postBlockColorTitleText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_color_title_text_text'.ua_teens_lang_prefix());

	if ( $postBlockColorTitleBlockTitle || $postBlockColorTitleText ):
?>
	<section class="post-block-color-title indent-top-small indent-bottom-small">
	  <div class="container">
	    <div class="row">
		    <?php if( $postBlockColorTitleBlockTitle ):?>
			    <h2 class="title text-center col-xl-10 col-12 offset-xl-1 offset-0"><?php echo $postBlockColorTitleBlockTitle;?></h2>
		    <?php endif;?>
		    <?php if( $postBlockColorTitleText ):?>
			    <div class="text col-12">
				    <?php echo wpautop($postBlockColorTitleText);?>
			    </div>
		    <?php endif;?>
	    </div>
	  </div>
	</section>
<?php endif;?>

	<!-- Блок з цитатою та фото спікера -->
<?php
	$postBlockPicQuoteImage = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_quote_photo_image'.ua_teens_lang_prefix());
	$postBlockPicQuoteText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_quote_photo_text'.ua_teens_lang_prefix());

	if ( $postBlockPicQuoteText ):
?>
	<section class="post-block-pic-quote">
	  <div class="container">
	    <div class="row">
		    <?php if( $postBlockPicQuoteImage ):?>
			    <div class="pic-wrapper col-xl-3 col-md-4 col-6">
				    <div class="inner">
					    <img
						    class="lazy"
						    data-src="<?php echo wp_get_attachment_image_src($postBlockPicQuoteImage, 'full')[0];?>"
						    alt="<?php echo get_post_meta($postBlockPicQuoteImage, '_wp_attachment_image_alt', TRUE);?>"
					    >
				    </div>
			    </div>
		    <?php endif;?>
		    <div class="text-content col-lx-9 col-md-8 col-12">
			    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="150" viewBox="0 0 180 150" fill="none">
				    <g opacity="0.2">
					    <path d="M180 100.503C180 111.373 176.512 120.432 169.535 127.679C162.558 134.925 153.488 138.549 142.326 138.549C128.651 138.549 117.349 133.532 108.419 123.498C99.7674 113.185 95.4418 100.921 95.4418 86.7064C95.4418 66.0809 103.116 48.382 118.465 33.6096C133.814 18.8373 152.372 11.4512 174.14 11.4512L174.977 17.3043C161.581 17.3043 149.302 22.0426 138.14 31.5192C126.977 40.9959 121.395 51.8659 121.395 64.1299C121.395 66.917 121.674 69.0074 122.233 70.401C123.07 71.7946 124.186 72.4914 125.581 72.4914C127.535 72.4914 130.465 71.6553 134.372 69.9828C138.558 68.0318 142.047 67.0563 144.837 67.0563C154.047 67.0563 162.139 70.2617 169.116 76.6724C176.372 82.8042 180 90.7478 180 100.503ZM84.5582 100.503C84.5582 111.373 81.0697 120.432 74.0931 127.679C67.1162 134.925 58.0465 138.549 46.8837 138.549C33.2092 138.549 21.907 133.532 12.9767 123.498C4.32558 113.185 0 100.921 0 86.7064C0 66.0809 7.67441 48.382 23.0233 33.6096C38.3722 18.8373 56.9302 11.4512 78.6978 11.4512L79.5349 17.3043C66.1396 17.3043 53.8606 22.0426 42.6978 31.5192C31.535 40.9959 25.9535 51.8659 25.9535 64.1299C25.9535 66.917 26.2326 69.0074 26.7906 70.401C27.628 71.7946 28.7442 72.4914 30.1396 72.4914C32.093 72.4914 35.0232 71.6553 38.9302 69.9828C43.1163 68.0318 46.6045 67.0563 49.3953 67.0563C58.6047 67.0563 66.6976 70.2617 73.6745 76.6724C80.9303 82.8042 84.5582 90.7478 84.5582 100.503Z" fill="#F64B0A"/>
				    </g>
			    </svg>
			    <div class="inner"><?php echo wpautop($postBlockPicQuoteText);?></div>
		    </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

	<!-- Блок з переліком -->
<?php
	$postBlockListBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_list_block_title'.ua_teens_lang_prefix());
	$postBlockListSubtitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_list_block_subtitle'.ua_teens_lang_prefix());
	$postBlockListContent = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_list_block_list'.ua_teens_lang_prefix());
	$i = 0;

	if ( $postBlockListBlockTitle && $postBlockListContent ):
?>
	<section class="post-block-list indent-bottom-small indent-top-small">
	  <div class="container">
	    <div class="row">
	      <h2 class="block-title upper-title small-title large-margin text-center col-xl-10 offset-xl-1 col-12 offset-0">
		      <?php echo $postBlockListBlockTitle;?>
	      </h2>
	    </div>
		  <?php if( $postBlockListSubtitle ):?>
			  <div class="row">
				  <p class="subtitle small-subtitle col-xl-8 col-lg-9 col-md-10 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0"><?php echo $postBlockListSubtitle;?></p>
			  </div>
		  <?php endif;?>
		  <div class="row">
			  <ul class="content col-xl-8 col-lg-9 col-12 offset-lg-2 offset-0">
				  <?php foreach( $postBlockListContent as $item ): $i++;?>
					  <li>
						  <?php if( $i < 10 ):?>
							  <p class="pretty-number">0<?php echo $i;?></p>
							<?php else:?>
							  <p class="pretty-number"><?php echo $i;?></p>
						  <?php endif;?>
						  <div class="text-content">
							  <?php if( $item['title'] ):?>
								  <h3><?php echo $item['title'];?></h3>
							  <?php endif;?>
							  <?php if( $item['text'] ):?>
								  <p><?php echo $item['text'];?></p>
							  <?php endif;?>
						  </div>
					  </li>
				  <?php endforeach;?>
			  </ul>
		  </div>
	  </div>
	</section>
<?php endif;?>

	<!-- Блок з висновками -->
<?php
	$postBlockResultBlockTitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_result_block_title'.ua_teens_lang_prefix());
	$postBlockResultBlockText = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_result_block_text'.ua_teens_lang_prefix());

	if ( $postBlockResultBlockTitle || $postBlockResultBlockText ):
?>
	<section class="post-block-result indent-top-small indent-bottom-small">
	  <div class="container">
		  <?php if( $postBlockResultBlockTitle ):?>
			  <div class="row">
				  <h2 class="block-title upper-title big-title large-margin col-12"><span><?php echo $postBlockResultBlockTitle;?></span></h2>
			  </div>
		  <?php endif;?>
		  <?php if( $postBlockResultBlockText ):?>
			  <div class="row">
				  <p class="subtitle col-xl-6 col-lg-7 col-md-8 col-12"><?php echo $postBlockResultBlockText;?></p>
			  </div>
		  <?php endif;?>
	  </div>
	</section>
<?php endif;?>
<?php get_footer();
