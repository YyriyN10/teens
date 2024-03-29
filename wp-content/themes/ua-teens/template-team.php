<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template team
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 *
	 */

	get_header();?>
	<!-- Main screen -->
	<section class="team-main-screen" style="background-image: url(<?php the_post_thumbnail_url();?>)">
	  <div class="container">
	    <div class="row">
	      <h1 class="block-title upper-title big-title col-12 text-center">
		      <?php
			      $mainScreenTeamTitle = get_the_title();
			      $mainScreenTeamTitle = explode(' ', $mainScreenTeamTitle );
		      ?>
		      <?php echo $mainScreenTeamTitle[0];?> <span><?php echo $mainScreenTeamTitle[1];?></span>
	      </h1>
	    </div>
	  </div>
	</section>

	<!-- All team list -->
	<section class="all-team-list indent-top-small">
	  <div class="container">
	    <div class="row">
	      <div class="content col-12">
	        <ul class="directions-list">
		        <?php
			        $teamSubCat = get_categories( array(
				        'taxonomy'     => 'team-tax',
				        'type'         => 'team',
				        'child_of'     => false,
				        'parent'       => '',
				        'orderby'      => 'name',
				        'order'        => 'ASC',
				        'hide_empty'   => 1,
				        'hierarchical' => false,
				        'number'       => 0,
				        'pad_counts'   => false,
			        ) );

		        ?>
		        <li class="item active" data-catid = '0'>
							<?php echo esc_html( pll__( 'Уся команда' ) ); ?>
		        </li>
		        <?php foreach( $teamSubCat  as $subCat):?>
			        <li class="item " data-catid = '<?php echo $subCat->term_id;?>'>
				        <?php echo $subCat->name;?>
			        </li>
		        <?php endforeach;?>
	        </ul>
		      <div class="team-list" id="team-list">
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
		      </div>
	      </div>
	    </div>
		  <div class="row">
			  <div class="col-12 text-center">
				  <p class="soon">coming soon…</p>
			  </div>
		  </div>
	  </div>
	</section>
<?php get_footer();
