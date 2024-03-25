<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$sitePhone = carbon_get_theme_option('ua_teens_phone');

	if ( $sitePhone ):

		$phoneToCall =  preg_replace( '/[^0-9]/', '', $sitePhone );

		?>
<a href="tel:<?php echo $phoneToCall;?>" class="phone">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M16.24 2H7.76C5 2 4 3 4 5.81V18.19C4 21 5 22 7.76 22H16.23C19 22 20 21 20 18.19V5.81C20 3 19 2 16.24 2ZM12 19.3C11.04 19.3 10.25 18.51 10.25 17.55C10.25 16.59 11.04 15.8 12 15.8C12.96 15.8 13.75 16.59 13.75 17.55C13.75 18.51 12.96 19.3 12 19.3ZM14 6.25H10C9.59 6.25 9.25 5.91 9.25 5.5C9.25 5.09 9.59 4.75 10 4.75H14C14.41 4.75 14.75 5.09 14.75 5.5C14.75 5.91 14.41 6.25 14 6.25Z" fill="#F9F9F9"/>
	</svg>
	<?php echo $sitePhone;?>
</a>
<?php endif;?>
