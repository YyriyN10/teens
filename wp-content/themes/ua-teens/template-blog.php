<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Blog
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 *
	 */

	get_header();?>

	<!-- Головний екран блогу -->
	<section class="blog-main-screen" style="background-image: url(<?php the_post_thumbnail_url();?>)">
	  <div class="container">
	    <div class="row">
	      <h1 class="block-title small-title upper-title col-12 text-center"><?php echo esc_html( pll__( 'UA-Teens блог ' ) ); ?></h1>
		    <p class="col-12 text-center"><?php echo esc_html( pll__( 'Ще більше користі' ) ); ?></p>
	    </div>
	  </div>
	</section>

	<!-- Перелік статей -->
	<section class="blog-post-list indent-top-small">
	  <div class="container">
	    <div class="row">
		     <?php
		     	$blogArgs = array(
		     		'posts_per_page' => -1,
		     		'orderby' 	 => 'date',
		     		'post_type'  => 'blog',
		     		'post_status'    => 'publish'
		     	);

		     	$blogList = new WP_Query( $blogArgs );

		     		  if ( $blogList->have_posts() ) :

		     			  while ( $blogList->have_posts() ) : $blogList->the_post();

		     		  $customLink = carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_custom_link'.ua_teens_lang_prefix());
		     		?>
                  <?php if( $customLink !=='' ):?>
                      <a href="<?php echo $customLink;?>" target="_blank" class="post-preview col-sm-6">
                  <?php else:?>
                      <a href="<?php the_permalink();?>" target="_blank" class="post-preview col-sm-6">
                  <?php endif;?>

						     <span class="pic-preview">
							     <img
								     class="lazy"
								     data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
								     alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
							     >
						     </span>
						     <span class="info-wrapper">
							     <span class="title"><?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_blob_post_page_format_title'.ua_teens_lang_prefix());?></span>
							     <span class="description"><?php the_excerpt();?></span>
							     <span class="more">
								     <?php echo esc_html( pll__( 'Читати' ) ); ?>
								     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M9 18L15 12L9 6" stroke="#1D1D1B"/>
</svg>
							     </span>
						     </span>
					     </a>
		     		<?php endwhile;?>
		     	<?php endif; ?>
		     <?php wp_reset_postdata(); ?>
	    </div>
	  </div>
	</section>
<?php get_footer();
