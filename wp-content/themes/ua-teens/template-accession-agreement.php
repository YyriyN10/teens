<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Accession Agreement
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package ua_teens
	 *
	 */
	get_header();?>

	<!-- Main-screen -->
	<section class="aa-main-screen" style="background-image: url(<?php the_post_thumbnail_url();?>)">
		<div class="container">
			<div class="row">
				<h1 class="block-title text-center col-xl-8 col-lx-10 col-12 offset-xl-2 offset-lg-1 offset-0 upper-title small-title small-margin">
					<?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_title'.ua_teens_lang_prefix());;?>
				</h1>
				<p class="subtitle small-subtitle col-12 text-center">
					<?php echo carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_subtitle'.ua_teens_lang_prefix());;?>
				</p>
			</div>
		</div>
	</section>

	<!-- content -->
	<section class="pp-content indent-top-small indent-bottom-small">
		<div class="container">
			<div class="row">
				<div class="content col-md-8 col-12">
					<?php the_content();?>
				</div>
				<div class="pic col-md-2">
					<svg width="180" height="6269" viewBox="0 0 180 6269" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1177_1159)">
							<g opacity="0.05" clip-path="url(#clip1_1177_1159)">
								<path d="M180 207.421L180 394.271L0 394.271L2.47439e-07 373.521L159.986 373.521L159.986 228.196L1.98042e-06 228.196L2.22786e-06 207.446L180 207.446L180 207.421ZM139.997 248.946L139.997 352.746L4.9518e-07 352.746L7.4262e-07 331.996L119.984 331.996L119.984 269.721L1.48524e-06 269.721L1.73268e-06 248.971L139.997 248.971L139.997 248.946ZM1.2378e-06 290.471L99.9946 290.471L99.9946 311.221L9.90361e-07 311.221L1.2378e-06 290.471Z" fill="#F64B0A"/>
								<path d="M19.9892 0.000351191L19.9892 83.0503L180 83.0503L180 103.8L19.9892 103.8L19.9892 186.85L0 186.85L2.22816e-06 0.000350952L19.9892 0.000351191ZM179.976 124.55L179.976 145.3L59.9919 145.3L59.9919 186.825L40.0027 186.825L40.0027 124.55L180 124.55L179.976 124.55ZM79.981 166.075L179.976 166.075L179.976 186.825L80.0054 186.825L80.0054 166.075L79.981 166.075ZM59.9919 0.000351668L59.9919 41.5253L179.976 41.5253L179.976 62.2752L40.0027 62.2752L40.0027 0.000351429L59.9919 0.000351668ZM79.981 0.000351906L179.976 0.000353098L179.976 20.7502L80.0054 20.7502L80.0054 0.000351906L79.981 0.000351906Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip2_1177_1159)">
								<path d="M180 626.933L180 813.782L0 813.782L2.47439e-07 793.033L159.986 793.033L159.986 647.708L1.98042e-06 647.708L2.22786e-06 626.958L180 626.958L180 626.933ZM139.997 668.458L139.997 772.258L4.9518e-07 772.257L7.4262e-07 751.508L119.984 751.508L119.984 689.233L1.48524e-06 689.233L1.73268e-06 668.483L139.997 668.483L139.997 668.458ZM1.2378e-06 709.983L99.9946 709.983L99.9946 730.733L9.90361e-07 730.733L1.2378e-06 709.983Z" fill="#F64B0A"/>
								<path d="M19.9892 419.512L19.9892 502.562L180 502.562L180 523.312L19.9892 523.312L19.9892 606.362L0 606.362L2.22816e-06 419.512L19.9892 419.512ZM179.976 544.062L179.976 564.812L59.9919 564.812L59.9919 606.337L40.0027 606.337L40.0027 544.062L180 544.062L179.976 544.062ZM79.981 585.587L179.976 585.587L179.976 606.337L80.0054 606.337L80.0054 585.587L79.981 585.587ZM59.9919 419.512L59.9919 461.037L179.976 461.037L179.976 481.787L40.0027 481.787L40.0027 419.512L59.9919 419.512ZM79.981 419.512L179.976 419.512L179.976 440.262L80.0054 440.262L80.0054 419.512L79.981 419.512Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip3_1177_1159)">
								<path d="M180 1046.44L180 1233.29L0 1233.29L2.47439e-07 1212.54L159.986 1212.54L159.986 1067.22L1.98042e-06 1067.22L2.22786e-06 1046.47L180 1046.47L180 1046.44ZM139.997 1087.97L139.997 1191.77L4.9518e-07 1191.77L7.4262e-07 1171.02L119.984 1171.02L119.984 1108.75L1.48524e-06 1108.75L1.73268e-06 1088L139.997 1088L139.997 1087.97ZM1.2378e-06 1129.49L99.9946 1129.49L99.9946 1150.24L9.90361e-07 1150.24L1.2378e-06 1129.49Z" fill="#F64B0A"/>
								<path d="M19.9892 839.024L19.9892 922.074L180 922.074L180 942.824L19.9892 942.824L19.9892 1025.87L0 1025.87L2.22816e-06 839.024L19.9892 839.024ZM179.976 963.574L179.976 984.324L59.9919 984.324L59.9919 1025.85L40.0027 1025.85L40.0027 963.574L180 963.574L179.976 963.574ZM79.981 1005.1L179.976 1005.1L179.976 1025.85L80.0054 1025.85L80.0054 1005.1L79.981 1005.1ZM59.9919 839.024L59.9919 880.549L179.976 880.549L179.976 901.299L40.0027 901.299L40.0027 839.024L59.9919 839.024ZM79.981 839.024L179.976 839.024L179.976 859.774L80.0054 859.774L80.0054 839.024L79.981 839.024Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip4_1177_1159)">
								<path d="M180 1465.96L180 1652.81L0 1652.81L2.47439e-07 1632.06L159.986 1632.06L159.986 1486.73L1.98042e-06 1486.73L2.22786e-06 1465.98L180 1465.98L180 1465.96ZM139.997 1507.48L139.997 1611.28L4.9518e-07 1611.28L7.4262e-07 1590.53L119.984 1590.53L119.984 1528.26L1.48524e-06 1528.26L1.73268e-06 1507.51L139.997 1507.51L139.997 1507.48ZM1.2378e-06 1549.01L99.9946 1549.01L99.9946 1569.76L9.90361e-07 1569.76L1.2378e-06 1549.01Z" fill="#F64B0A"/>
								<path d="M19.9892 1258.54L19.9892 1341.59L180 1341.59L180 1362.34L19.9892 1362.34L19.9892 1445.39L0 1445.39L2.22816e-06 1258.54L19.9892 1258.54ZM179.976 1383.09L179.976 1403.84L59.9919 1403.84L59.9919 1445.36L40.0027 1445.36L40.0027 1383.09L180 1383.09L179.976 1383.09ZM79.981 1424.61L179.976 1424.61L179.976 1445.36L80.0054 1445.36L80.0054 1424.61L79.981 1424.61ZM59.9919 1258.54L59.9919 1300.06L179.976 1300.06L179.976 1320.81L40.0027 1320.81L40.0027 1258.54L59.9919 1258.54ZM79.981 1258.54L179.976 1258.54L179.976 1279.29L80.0054 1279.29L80.0054 1258.54L79.981 1258.54Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip5_1177_1159)">
								<path d="M180 1885.47L180 2072.32L0 2072.32L2.47439e-07 2051.57L159.986 2051.57L159.986 1906.24L1.98042e-06 1906.24L2.22786e-06 1885.49L180 1885.49L180 1885.47ZM139.997 1926.99L139.997 2030.79L4.9518e-07 2030.79L7.4262e-07 2010.04L119.984 2010.04L119.984 1947.77L1.48524e-06 1947.77L1.73268e-06 1927.02L139.997 1927.02L139.997 1926.99ZM1.2378e-06 1968.52L99.9946 1968.52L99.9946 1989.27L9.90361e-07 1989.27L1.2378e-06 1968.52Z" fill="#F64B0A"/>
								<path d="M19.9892 1678.05L19.9892 1761.1L180 1761.1L180 1781.85L19.9892 1781.85L19.9892 1864.9L0 1864.9L2.22816e-06 1678.05L19.9892 1678.05ZM179.976 1802.6L179.976 1823.35L59.9919 1823.35L59.9919 1864.87L40.0027 1864.87L40.0027 1802.6L180 1802.6L179.976 1802.6ZM79.981 1844.12L179.976 1844.12L179.976 1864.87L80.0054 1864.87L80.0054 1844.12L79.981 1844.12ZM59.9919 1678.05L59.9919 1719.57L179.976 1719.57L179.976 1740.32L40.0027 1740.32L40.0027 1678.05L59.9919 1678.05ZM79.981 1678.05L179.976 1678.05L179.976 1698.8L80.0054 1698.8L80.0054 1678.05L79.981 1678.05Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip6_1177_1159)">
								<path d="M180 2304.98L180 2491.83L0 2491.83L2.47439e-07 2471.08L159.986 2471.08L159.986 2325.76L1.98042e-06 2325.76L2.22786e-06 2305.01L180 2305.01L180 2304.98ZM139.997 2346.51L139.997 2450.31L4.9518e-07 2450.31L7.4262e-07 2429.56L119.984 2429.56L119.984 2367.28L1.48524e-06 2367.28L1.73268e-06 2346.53L139.997 2346.53L139.997 2346.51ZM1.2378e-06 2388.03L99.9946 2388.03L99.9946 2408.78L9.90361e-07 2408.78L1.2378e-06 2388.03Z" fill="#F64B0A"/>
								<path d="M19.9892 2097.56L19.9892 2180.61L180 2180.61L180 2201.36L19.9892 2201.36L19.9892 2284.41L0 2284.41L2.22816e-06 2097.56L19.9892 2097.56ZM179.976 2222.11L179.976 2242.86L59.9919 2242.86L59.9919 2284.38L40.0027 2284.38L40.0027 2222.11L180 2222.11L179.976 2222.11ZM79.981 2263.63L179.976 2263.63L179.976 2284.38L80.0054 2284.38L80.0054 2263.63L79.981 2263.63ZM59.9919 2097.56L59.9919 2139.08L179.976 2139.08L179.976 2159.83L40.0027 2159.83L40.0027 2097.56L59.9919 2097.56ZM79.981 2097.56L179.976 2097.56L179.976 2118.31L80.0054 2118.31L80.0054 2097.56L79.981 2097.56Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip7_1177_1159)">
								<path d="M180 2724.49L180 2911.34L0 2911.34L2.47439e-07 2890.59L159.986 2890.59L159.986 2745.27L1.98042e-06 2745.27L2.22786e-06 2724.52L180 2724.52L180 2724.49ZM139.997 2766.02L139.997 2869.82L4.9518e-07 2869.82L7.4262e-07 2849.07L119.984 2849.07L119.984 2786.79L1.48524e-06 2786.79L1.73268e-06 2766.04L139.997 2766.04L139.997 2766.02ZM1.2378e-06 2807.54L99.9946 2807.54L99.9946 2828.29L9.90361e-07 2828.29L1.2378e-06 2807.54Z" fill="#F64B0A"/>
								<path d="M19.9892 2517.07L19.9892 2600.12L180 2600.12L180 2620.87L19.9892 2620.87L19.9892 2703.92L0 2703.92L2.22816e-06 2517.07L19.9892 2517.07ZM179.976 2641.62L179.976 2662.37L59.9919 2662.37L59.9919 2703.9L40.0027 2703.9L40.0027 2641.62L180 2641.62L179.976 2641.62ZM79.981 2683.15L179.976 2683.15L179.976 2703.9L80.0054 2703.9L80.0054 2683.15L79.981 2683.15ZM59.9919 2517.07L59.9919 2558.6L179.976 2558.6L179.976 2579.35L40.0027 2579.35L40.0027 2517.07L59.9919 2517.07ZM79.981 2517.07L179.976 2517.07L179.976 2537.82L80.0054 2537.82L80.0054 2517.07L79.981 2517.07Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip8_1177_1159)">
								<path d="M180 3144.01L180 3330.85L0 3330.85L2.47439e-07 3310.1L159.986 3310.1L159.986 3164.78L1.98042e-06 3164.78L2.22786e-06 3144.03L180 3144.03L180 3144.01ZM139.997 3185.53L139.997 3289.33L4.9518e-07 3289.33L7.4262e-07 3268.58L119.984 3268.58L119.984 3206.31L1.48524e-06 3206.31L1.73268e-06 3185.56L139.997 3185.56L139.997 3185.53ZM1.2378e-06 3227.05L99.9946 3227.05L99.9946 3247.8L9.90361e-07 3247.8L1.2378e-06 3227.05Z" fill="#F64B0A"/>
								<path d="M19.9892 2936.58L19.9892 3019.63L180 3019.63L180 3040.38L19.9892 3040.38L19.9892 3123.43L0 3123.43L2.22816e-06 2936.58L19.9892 2936.58ZM179.976 3061.13L179.976 3081.88L59.9919 3081.88L59.9919 3123.41L40.0027 3123.41L40.0027 3061.13L180 3061.13L179.976 3061.13ZM79.981 3102.66L179.976 3102.66L179.976 3123.41L80.0054 3123.41L80.0054 3102.66L79.981 3102.66ZM59.9919 2936.58L59.9919 2978.11L179.976 2978.11L179.976 2998.86L40.0027 2998.86L40.0027 2936.58L59.9919 2936.58ZM79.981 2936.58L179.976 2936.58L179.976 2957.33L80.0054 2957.33L80.0054 2936.58L79.981 2936.58Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip9_1177_1159)">
								<path d="M180 3563.52L180 3750.37L0 3750.37L2.47439e-07 3729.62L159.986 3729.62L159.986 3584.29L1.98042e-06 3584.29L2.22786e-06 3563.54L180 3563.54L180 3563.52ZM139.997 3605.04L139.997 3708.84L4.9518e-07 3708.84L7.4262e-07 3688.09L119.984 3688.09L119.984 3625.82L1.48524e-06 3625.82L1.73268e-06 3605.07L139.997 3605.07L139.997 3605.04ZM1.2378e-06 3646.57L99.9946 3646.57L99.9946 3667.32L9.90361e-07 3667.32L1.2378e-06 3646.57Z" fill="#F64B0A"/>
								<path d="M19.9892 3356.1L19.9892 3439.15L180 3439.15L180 3459.9L19.9892 3459.9L19.9892 3542.95L0 3542.95L2.22816e-06 3356.1L19.9892 3356.1ZM179.976 3480.65L179.976 3501.4L59.9919 3501.4L59.9919 3542.92L40.0027 3542.92L40.0027 3480.65L180 3480.65L179.976 3480.65ZM79.981 3522.17L179.976 3522.17L179.976 3542.92L80.0054 3542.92L80.0054 3522.17L79.981 3522.17ZM59.9919 3356.1L59.9919 3397.62L179.976 3397.62L179.976 3418.37L40.0027 3418.37L40.0027 3356.1L59.9919 3356.1ZM79.981 3356.1L179.976 3356.1L179.976 3376.85L80.0054 3376.85L80.0054 3356.1L79.981 3356.1Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip10_1177_1159)">
								<path d="M180 3983.03L180 4169.88L0 4169.88L2.47439e-07 4149.13L159.986 4149.13L159.986 4003.8L1.98042e-06 4003.8L2.22786e-06 3983.05L180 3983.05L180 3983.03ZM139.997 4024.55L139.997 4128.35L4.9518e-07 4128.35L7.4262e-07 4107.6L119.984 4107.6L119.984 4045.33L1.48524e-06 4045.33L1.73268e-06 4024.58L139.997 4024.58L139.997 4024.55ZM1.2378e-06 4066.08L99.9946 4066.08L99.9946 4086.83L9.90361e-07 4086.83L1.2378e-06 4066.08Z" fill="#F64B0A"/>
								<path d="M19.9892 3775.61L19.9892 3858.66L180 3858.66L180 3879.41L19.9892 3879.41L19.9892 3962.46L0 3962.46L2.22816e-06 3775.61L19.9892 3775.61ZM179.976 3900.16L179.976 3920.91L59.9919 3920.91L59.9919 3962.43L40.0027 3962.43L40.0027 3900.16L180 3900.16L179.976 3900.16ZM79.981 3941.68L179.976 3941.68L179.976 3962.43L80.0054 3962.43L80.0054 3941.68L79.981 3941.68ZM59.9919 3775.61L59.9919 3817.13L179.976 3817.13L179.976 3837.88L40.0027 3837.88L40.0027 3775.61L59.9919 3775.61ZM79.981 3775.61L179.976 3775.61L179.976 3796.36L80.0054 3796.36L80.0054 3775.61L79.981 3775.61Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip11_1177_1159)">
								<path d="M180 4402.54L180 4589.39L0 4589.39L2.47439e-07 4568.64L159.986 4568.64L159.986 4423.32L1.98042e-06 4423.32L2.22786e-06 4402.57L180 4402.57L180 4402.54ZM139.997 4444.07L139.997 4547.87L4.9518e-07 4547.87L7.4262e-07 4527.12L119.984 4527.12L119.984 4464.84L1.48524e-06 4464.84L1.73268e-06 4444.09L139.997 4444.09L139.997 4444.07ZM1.2378e-06 4485.59L99.9946 4485.59L99.9946 4506.34L9.90361e-07 4506.34L1.2378e-06 4485.59Z" fill="#F64B0A"/>
								<path d="M19.9892 4195.12L19.9892 4278.17L180 4278.17L180 4298.92L19.9892 4298.92L19.9892 4381.97L0 4381.97L2.22816e-06 4195.12L19.9892 4195.12ZM179.976 4319.67L179.976 4340.42L59.9919 4340.42L59.9919 4381.94L40.0027 4381.94L40.0027 4319.67L180 4319.67L179.976 4319.67ZM79.981 4361.19L179.976 4361.19L179.976 4381.94L80.0054 4381.94L80.0054 4361.19L79.981 4361.19ZM59.9919 4195.12L59.9919 4236.65L179.976 4236.65L179.976 4257.4L40.0027 4257.4L40.0027 4195.12L59.9919 4195.12ZM79.981 4195.12L179.976 4195.12L179.976 4215.87L80.0054 4215.87L80.0054 4195.12L79.981 4195.12Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip12_1177_1159)">
								<path d="M180 4822.05L180 5008.9L0 5008.9L2.47439e-07 4988.15L159.986 4988.15L159.986 4842.83L1.98042e-06 4842.83L2.22786e-06 4822.08L180 4822.08L180 4822.05ZM139.997 4863.58L139.997 4967.38L4.9518e-07 4967.38L7.4262e-07 4946.63L119.984 4946.63L119.984 4884.35L1.48524e-06 4884.35L1.73268e-06 4863.6L139.997 4863.6L139.997 4863.58ZM1.2378e-06 4905.1L99.9946 4905.1L99.9946 4925.85L9.90361e-07 4925.85L1.2378e-06 4905.1Z" fill="#F64B0A"/>
								<path d="M19.9892 4614.63L19.9892 4697.68L180 4697.68L180 4718.43L19.9892 4718.43L19.9892 4801.48L0 4801.48L2.22816e-06 4614.63L19.9892 4614.63ZM179.976 4739.18L179.976 4759.93L59.9919 4759.93L59.9919 4801.46L40.0027 4801.46L40.0027 4739.18L180 4739.18L179.976 4739.18ZM79.981 4780.71L179.976 4780.71L179.976 4801.46L80.0054 4801.46L80.0054 4780.71L79.981 4780.71ZM59.9919 4614.63L59.9919 4656.16L179.976 4656.16L179.976 4676.91L40.0027 4676.91L40.0027 4614.63L59.9919 4614.63ZM79.981 4614.63L179.976 4614.63L179.976 4635.38L80.0054 4635.38L80.0054 4614.63L79.981 4614.63Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip13_1177_1159)">
								<path d="M180 5241.57L180 5428.42L0 5428.42L2.47439e-07 5407.67L159.986 5407.67L159.986 5262.34L1.98042e-06 5262.34L2.22786e-06 5241.59L180 5241.59L180 5241.57ZM139.997 5283.09L139.997 5386.89L4.9518e-07 5386.89L7.4262e-07 5366.14L119.984 5366.14L119.984 5303.87L1.48524e-06 5303.87L1.73268e-06 5283.12L139.997 5283.12L139.997 5283.09ZM1.2378e-06 5324.62L99.9946 5324.62L99.9946 5345.37L9.90361e-07 5345.37L1.2378e-06 5324.62Z" fill="#F64B0A"/>
								<path d="M19.9892 5034.14L19.9892 5117.19L180 5117.19L180 5137.94L19.9892 5137.94L19.9892 5220.99L0 5220.99L2.22816e-06 5034.14L19.9892 5034.14ZM179.976 5158.69L179.976 5179.44L59.9919 5179.44L59.9919 5220.97L40.0027 5220.97L40.0027 5158.69L180 5158.69L179.976 5158.69ZM79.981 5200.22L179.976 5200.22L179.976 5220.97L80.0054 5220.97L80.0054 5200.22L79.981 5200.22ZM59.9919 5034.14L59.9919 5075.67L179.976 5075.67L179.976 5096.42L40.0027 5096.42L40.0027 5034.14L59.9919 5034.14ZM79.981 5034.14L179.976 5034.14L179.976 5054.89L80.0054 5054.89L80.0054 5034.14L79.981 5034.14Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip14_1177_1159)">
								<path d="M180 5661.08L180 5847.93L0 5847.93L2.47439e-07 5827.18L159.986 5827.18L159.986 5681.85L1.98042e-06 5681.85L2.22786e-06 5661.1L180 5661.1L180 5661.08ZM139.997 5702.6L139.997 5806.4L4.9518e-07 5806.4L7.4262e-07 5785.65L119.984 5785.65L119.984 5723.38L1.48524e-06 5723.38L1.73268e-06 5702.63L139.997 5702.63L139.997 5702.6ZM1.2378e-06 5744.13L99.9946 5744.13L99.9946 5764.88L9.90361e-07 5764.88L1.2378e-06 5744.13Z" fill="#F64B0A"/>
								<path d="M19.9892 5453.66L19.9892 5536.71L180 5536.71L180 5557.46L19.9892 5557.46L19.9892 5640.51L0 5640.51L2.22816e-06 5453.66L19.9892 5453.66ZM179.976 5578.21L179.976 5598.96L59.9919 5598.96L59.9919 5640.48L40.0027 5640.48L40.0027 5578.21L180 5578.21L179.976 5578.21ZM79.981 5619.73L179.976 5619.73L179.976 5640.48L80.0054 5640.48L80.0054 5619.73L79.981 5619.73ZM59.9919 5453.66L59.9919 5495.18L179.976 5495.18L179.976 5515.93L40.0027 5515.93L40.0027 5453.66L59.9919 5453.66ZM79.981 5453.66L179.976 5453.66L179.976 5474.41L80.0054 5474.41L80.0054 5453.66L79.981 5453.66Z" fill="#F64B0A"/>
							</g>
							<g opacity="0.05" clip-path="url(#clip15_1177_1159)">
								<path d="M180 6080.59L180 6267.44L0 6267.44L2.47439e-07 6246.69L159.986 6246.69L159.986 6101.36L1.98042e-06 6101.36L2.22786e-06 6080.62L180 6080.62L180 6080.59ZM139.997 6122.11L139.997 6225.91L4.9518e-07 6225.91L7.4262e-07 6205.16L119.984 6205.16L119.984 6142.89L1.48524e-06 6142.89L1.73268e-06 6122.14L139.997 6122.14L139.997 6122.11ZM1.2378e-06 6163.64L99.9946 6163.64L99.9946 6184.39L9.90361e-07 6184.39L1.2378e-06 6163.64Z" fill="#F64B0A"/>
								<path d="M19.9892 5873.17L19.9892 5956.22L180 5956.22L180 5976.97L19.9892 5976.97L19.9892 6060.02L0 6060.02L2.22816e-06 5873.17L19.9892 5873.17ZM179.976 5997.72L179.976 6018.47L59.9919 6018.47L59.9919 6059.99L40.0027 6059.99L40.0027 5997.72L180 5997.72L179.976 5997.72ZM79.981 6039.24L179.976 6039.24L179.976 6059.99L80.0054 6059.99L80.0054 6039.24L79.981 6039.24ZM59.9919 5873.17L59.9919 5914.69L179.976 5914.69L179.976 5935.44L40.0027 5935.44L40.0027 5873.17L59.9919 5873.17ZM79.981 5873.17L179.976 5873.17L179.976 5893.92L80.0054 5893.92L80.0054 5873.17L79.981 5873.17Z" fill="#F64B0A"/>
							</g>
						</g>
						<defs>
							<clipPath id="clip0_1177_1159">
								<rect width="180" height="6268.68" fill="white"/>
							</clipPath>
							<clipPath id="clip1_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 395.512) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip2_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 815.024) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip3_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 1234.54) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip4_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 1654.05) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip5_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 2073.56) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip6_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 2493.07) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip7_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 2912.58) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip8_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 3332.1) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip9_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 3751.61) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip10_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 4171.12) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip11_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 4590.63) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip12_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 5010.14) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip13_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 5429.66) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip14_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 5849.17) rotate(-90)"/>
							</clipPath>
							<clipPath id="clip15_1177_1159">
								<rect width="395.512" height="180" fill="white" transform="translate(0 6268.68) rotate(-90)"/>
							</clipPath>
						</defs>
					</svg>
				</div>
			</div>
		</div>
	</section>

	<!-- Form content -->
<?php
	$accessionAgreementSubtitle = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_name'.ua_teens_lang_prefix());
	$accessionAgreementWho = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_text_who'.ua_teens_lang_prefix());
	$accessionAgreementStatement = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_text_statement'.ua_teens_lang_prefix());
	$accessionAgreementPersonsStudent = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_text_persons_student'.ua_teens_lang_prefix());
	$accessionAgreementPersonsCustomer = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_text_persons_customer'.ua_teens_lang_prefix());
	$accessionAgreementAuthorityCustomer = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_text_authority_customer'.ua_teens_lang_prefix());
	$accessionAgreementSignatureAuthority = carbon_get_post_meta(get_the_ID(), 'ua_teens_accession_agreement_form_text_signature_authority'.ua_teens_lang_prefix());

	if ( $accessionAgreementAuthorityCustomer && $accessionAgreementPersonsCustomer && $accessionAgreementPersonsStudent && $accessionAgreementSignatureAuthority && $accessionAgreementStatement && $accessionAgreementSubtitle && $accessionAgreementWho ):
?>
	<section class="form-content">
		<div class="white-part indent-top-small indent-bottom-small">
			<div class="container">
				<div class="row">
					<h2 class="block-title upper-title big-title small-margin col-12 text-center">
						<span><?php echo esc_html( pll__( 'Форма' ) ); ?></span>
					</h2>
					<p class="subtitle col-12 text-center small-subtitle"><?php echo $accessionAgreementSubtitle;?></p>
				</div>
			</div>
		</div>
		<div class="dark-part indent-top-small indent-bottom-small">
      <div class="container">
        <div class="row">
          <div class="content col-12">
            <form id="agreement-form" action="<?php echo THEME_PATH;?>/upload.php" method="post" enctype="multipart/form-data">

              <input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
              <input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
              <input type="hidden" name="page_name" value="<?php the_title();?>">
              <input type="hidden" name="page_link" value="<?php the_permalink();?>">

              <p class="who-form"><?php echo $accessionAgreementWho;?></p>
              <div class="form-contact-part">
                <div class="form-group">
                  <label for="accession-field-fio"><?php echo esc_html( pll__( 'Прізвище, імя, по батькові або найменування:' ) ); ?></label>
                  <input type="text" name="first_last_name" class="form-control" id="accession-field-fio" required>
                </div>
                <div class="form-group">
                  <label for="accession-field-email">Email</label>
                  <input type="email" name="email" class="form-control" id="accession-field-email" required>
                </div>
                <div class="form-group">
                  <label for="accession-field-address"><?php echo esc_html( pll__( 'Адреса реєстрації:' ) ); ?> </label>
                  <input type="text" name="address" class="form-control" id="accession-field-address" required>
                </div>
                <div class="form-group">
                  <label for="accession-field-edrpu"><?php echo esc_html( pll__( 'Код ЄДРПОУ (для юридичних осіб):' ) ); ?> </label>
                  <input type="number" name="edrpu" class="form-control" id="accession-field-edrpu">
                </div>
                <div class="form-group">
                  <label for="accession-field-phone"><?php echo esc_html( pll__( 'Ваш номер телефону' ) ); ?></label>
                  <input type="tel" name="phone" class="form-control" id="accession-field-phone" required>
                </div>
              </div>

              <div class="statement">
                <h3><?php echo esc_html( pll__( 'Заява' ) ); ?></h3>
                <p><?php echo $accessionAgreementStatement;?></p>
              </div>

              <div class="form-men-part">
                <div class="left-part">
                  <div class="form-group">
                    <label for="accession-field-student-name"><span>(<?php echo esc_html( pll__( 'тинейджера' ) ); ?>)</span><?php echo esc_html( pll__( 'Імя, прізвище Cтудента:' ) ); ?></label>
                    <input type="text" name="student_name" class="form-control" id="accession-field-student-name" required>
                  </div>
                  <div class="form-group">
                    <label for="accession-field-birthday"><span>(<?php echo esc_html( pll__( 'тинейджера' ) ); ?>)</span><?php echo esc_html( pll__( 'Дата народження' ) ); ?></label>
                    <input type="date" class="form-control birthday" id="accession-field-birthday" name="birthday" required>
                    <svg class="piker-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M2.625 20.625C2.625 21.0398 2.96016 21.375 3.375 21.375H20.625C21.0398 21.375 21.375 21.0398 21.375 20.625V10.7812H2.625V20.625ZM20.625 4.3125H16.6875V2.8125C16.6875 2.70937 16.6031 2.625 16.5 2.625H15.1875C15.0844 2.625 15 2.70937 15 2.8125V4.3125H9V2.8125C9 2.70937 8.91563 2.625 8.8125 2.625H7.5C7.39687 2.625 7.3125 2.70937 7.3125 2.8125V4.3125H3.375C2.96016 4.3125 2.625 4.64766 2.625 5.0625V9.1875H21.375V5.0625C21.375 4.64766 21.0398 4.3125 20.625 4.3125Z" fill="#F8F8F8"/>
                    </svg>
                  </div>
                  <div class="form-group">
                    <label for="accession-field-student-phone"><span>(<?php echo esc_html( pll__( 'тинейджера' ) ); ?>)</span><?php echo esc_html( pll__( 'Контактний телефон Студента:' ) ); ?></label>
                    <input type="tel" name="student_phone" class="form-control" id="accession-field-student-phone" required>
                  </div>
                  <div class="form-group">
                    <label for="accession-field-student-email">Email</label>
                    <input type="email" name="student_email" class="form-control" id="accession-field-student-email" required>
                  </div>
                </div>
                <div class="right-part">
                  <div class="doc-group">
                    <p><?php echo $accessionAgreementPersonsStudent;?></p>
                    <label >
                      <span class="button orange-btn modification">
	                      <?php echo esc_html( pll__( 'Завантажити файл' ) ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                          <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
                        </svg>
                      </span>
                      <svg class="file-added" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M26 6.5H14.4635C14.3243 6.5 14.1879 6.46127 14.0695 6.38815C13.9511 6.31504 13.8553 6.21042 13.793 6.086L11.414 1.3295C11.2895 1.08038 11.0981 0.870832 10.8613 0.724329C10.6244 0.577825 10.3515 0.500149 10.073 0.5H2C1.60218 0.5 1.22064 0.658035 0.93934 0.93934C0.658035 1.22064 0.5 1.60218 0.5 2V26C0.5 26.3978 0.658035 26.7794 0.93934 27.0607C1.22064 27.342 1.60218 27.5 2 27.5H26C26.3978 27.5 26.7794 27.342 27.0607 27.0607C27.342 26.7794 27.5 26.3978 27.5 26V8C27.5 7.60218 27.342 7.22064 27.0607 6.93934C26.7794 6.65804 26.3978 6.5 26 6.5ZM21.0605 13.5605L13.5605 21.0605C13.2792 21.3417 12.8977 21.4997 12.5 21.4997C12.1023 21.4997 11.7208 21.3417 11.4395 21.0605L6.9395 16.5605C6.79624 16.4221 6.68196 16.2566 6.60335 16.0736C6.52473 15.8906 6.48336 15.6938 6.48162 15.4946C6.47989 15.2954 6.51785 15.0979 6.59327 14.9136C6.66869 14.7292 6.78007 14.5617 6.92091 14.4209C7.06175 14.2801 7.22922 14.1687 7.41357 14.0933C7.59791 14.0178 7.79543 13.9799 7.9946 13.9816C8.19377 13.9834 8.3906 14.0247 8.57361 14.1033C8.75661 14.182 8.92213 14.2962 9.0605 14.4395L12.5 17.879L18.9395 11.4395C19.2224 11.1663 19.6013 11.0151 19.9946 11.0185C20.3879 11.0219 20.7641 11.1797 21.0422 11.4578C21.3203 11.7359 21.4781 12.1121 21.4815 12.5054C21.4849 12.8987 21.3337 13.2776 21.0605 13.5605Z" fill="#F9F9F9"/>
                      </svg>
                      <input type="file" class="form-control-file" accept="image/*" multiple name="file_1[]" id="file_1" required>
                    </label>
                  </div>
                  <div class="doc-group">
                    <p><?php echo $accessionAgreementPersonsCustomer;?></p>
                    <label >
                      <span class="button orange-btn modification">
	                      <?php echo esc_html( pll__( 'Завантажити файл' ) ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                          <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
                        </svg>
                      </span>
                      <svg class="file-added" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M26 6.5H14.4635C14.3243 6.5 14.1879 6.46127 14.0695 6.38815C13.9511 6.31504 13.8553 6.21042 13.793 6.086L11.414 1.3295C11.2895 1.08038 11.0981 0.870832 10.8613 0.724329C10.6244 0.577825 10.3515 0.500149 10.073 0.5H2C1.60218 0.5 1.22064 0.658035 0.93934 0.93934C0.658035 1.22064 0.5 1.60218 0.5 2V26C0.5 26.3978 0.658035 26.7794 0.93934 27.0607C1.22064 27.342 1.60218 27.5 2 27.5H26C26.3978 27.5 26.7794 27.342 27.0607 27.0607C27.342 26.7794 27.5 26.3978 27.5 26V8C27.5 7.60218 27.342 7.22064 27.0607 6.93934C26.7794 6.65804 26.3978 6.5 26 6.5ZM21.0605 13.5605L13.5605 21.0605C13.2792 21.3417 12.8977 21.4997 12.5 21.4997C12.1023 21.4997 11.7208 21.3417 11.4395 21.0605L6.9395 16.5605C6.79624 16.4221 6.68196 16.2566 6.60335 16.0736C6.52473 15.8906 6.48336 15.6938 6.48162 15.4946C6.47989 15.2954 6.51785 15.0979 6.59327 14.9136C6.66869 14.7292 6.78007 14.5617 6.92091 14.4209C7.06175 14.2801 7.22922 14.1687 7.41357 14.0933C7.59791 14.0178 7.79543 13.9799 7.9946 13.9816C8.19377 13.9834 8.3906 14.0247 8.57361 14.1033C8.75661 14.182 8.92213 14.2962 9.0605 14.4395L12.5 17.879L18.9395 11.4395C19.2224 11.1663 19.6013 11.0151 19.9946 11.0185C20.3879 11.0219 20.7641 11.1797 21.0422 11.4578C21.3203 11.7359 21.4781 12.1121 21.4815 12.5054C21.4849 12.8987 21.3337 13.2776 21.0605 13.5605Z" fill="#F9F9F9"/>
                      </svg>
                      <input type="file" class="form-control-file" accept="image/*" multiple name="file_2[]" id="file_2" required>
                    </label>
                  </div>
                  <div class="doc-group">
                    <p><?php echo $accessionAgreementAuthorityCustomer;?></p>
                    <label >
                      <span class="button orange-btn modification">
	                      <?php echo esc_html( pll__( 'Завантажити файл' ) ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                          <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
                        </svg>
                      </span>
                      <svg class="file-added" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M26 6.5H14.4635C14.3243 6.5 14.1879 6.46127 14.0695 6.38815C13.9511 6.31504 13.8553 6.21042 13.793 6.086L11.414 1.3295C11.2895 1.08038 11.0981 0.870832 10.8613 0.724329C10.6244 0.577825 10.3515 0.500149 10.073 0.5H2C1.60218 0.5 1.22064 0.658035 0.93934 0.93934C0.658035 1.22064 0.5 1.60218 0.5 2V26C0.5 26.3978 0.658035 26.7794 0.93934 27.0607C1.22064 27.342 1.60218 27.5 2 27.5H26C26.3978 27.5 26.7794 27.342 27.0607 27.0607C27.342 26.7794 27.5 26.3978 27.5 26V8C27.5 7.60218 27.342 7.22064 27.0607 6.93934C26.7794 6.65804 26.3978 6.5 26 6.5ZM21.0605 13.5605L13.5605 21.0605C13.2792 21.3417 12.8977 21.4997 12.5 21.4997C12.1023 21.4997 11.7208 21.3417 11.4395 21.0605L6.9395 16.5605C6.79624 16.4221 6.68196 16.2566 6.60335 16.0736C6.52473 15.8906 6.48336 15.6938 6.48162 15.4946C6.47989 15.2954 6.51785 15.0979 6.59327 14.9136C6.66869 14.7292 6.78007 14.5617 6.92091 14.4209C7.06175 14.2801 7.22922 14.1687 7.41357 14.0933C7.59791 14.0178 7.79543 13.9799 7.9946 13.9816C8.19377 13.9834 8.3906 14.0247 8.57361 14.1033C8.75661 14.182 8.92213 14.2962 9.0605 14.4395L12.5 17.879L18.9395 11.4395C19.2224 11.1663 19.6013 11.0151 19.9946 11.0185C20.3879 11.0219 20.7641 11.1797 21.0422 11.4578C21.3203 11.7359 21.4781 12.1121 21.4815 12.5054C21.4849 12.8987 21.3337 13.2776 21.0605 13.5605Z" fill="#F9F9F9"/>
                      </svg>
                      <input type="file" class="form-control-file" accept="image/*" multiple name="file_3[]" id="file_3" required>
                    </label>
                  </div>
                  <div class="doc-group">
                    <p><?php echo $accessionAgreementSignatureAuthority;?></p>
                    <label >
                      <span class="button orange-btn modification">
	                      <?php echo esc_html( pll__( 'Завантажити файл' ) ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                          <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
                        </svg>
                      </span>
                      <svg class="file-added" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M26 6.5H14.4635C14.3243 6.5 14.1879 6.46127 14.0695 6.38815C13.9511 6.31504 13.8553 6.21042 13.793 6.086L11.414 1.3295C11.2895 1.08038 11.0981 0.870832 10.8613 0.724329C10.6244 0.577825 10.3515 0.500149 10.073 0.5H2C1.60218 0.5 1.22064 0.658035 0.93934 0.93934C0.658035 1.22064 0.5 1.60218 0.5 2V26C0.5 26.3978 0.658035 26.7794 0.93934 27.0607C1.22064 27.342 1.60218 27.5 2 27.5H26C26.3978 27.5 26.7794 27.342 27.0607 27.0607C27.342 26.7794 27.5 26.3978 27.5 26V8C27.5 7.60218 27.342 7.22064 27.0607 6.93934C26.7794 6.65804 26.3978 6.5 26 6.5ZM21.0605 13.5605L13.5605 21.0605C13.2792 21.3417 12.8977 21.4997 12.5 21.4997C12.1023 21.4997 11.7208 21.3417 11.4395 21.0605L6.9395 16.5605C6.79624 16.4221 6.68196 16.2566 6.60335 16.0736C6.52473 15.8906 6.48336 15.6938 6.48162 15.4946C6.47989 15.2954 6.51785 15.0979 6.59327 14.9136C6.66869 14.7292 6.78007 14.5617 6.92091 14.4209C7.06175 14.2801 7.22922 14.1687 7.41357 14.0933C7.59791 14.0178 7.79543 13.9799 7.9946 13.9816C8.19377 13.9834 8.3906 14.0247 8.57361 14.1033C8.75661 14.182 8.92213 14.2962 9.0605 14.4395L12.5 17.879L18.9395 11.4395C19.2224 11.1663 19.6013 11.0151 19.9946 11.0185C20.3879 11.0219 20.7641 11.1797 21.0422 11.4578C21.3203 11.7359 21.4781 12.1121 21.4815 12.5054C21.4849 12.8987 21.3337 13.2776 21.0605 13.5605Z" fill="#F9F9F9"/>
                      </svg>
                      <input type="file" class="form-control-file" multiple accept="image/*" name="file_4[]" id="file_4" required>
                    </label>
                  </div>
                </div>
              </div>

              <div class="accept-button">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox"
                           checked
                           name="chboxfild"
                           class="form-check-input"
                           value="ok"
                           required >
                    <p class="checkbox__text">
	                    <?php echo esc_html( pll__( 'Приймаю умови угоди користувача та політики конфіденційності.' ) ); ?>
                    </p>
                  </label>
                </div>
                <button type="submit" class="button orange-btn modification">
		              <?php echo esc_html( pll__( 'Відправити цю заяву виконавцю' ) ); ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M9.5 18L15.5 12L9.5 6" stroke="#F9F9F9"/>
                  </svg>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

	</section>
<?php endif;?>

<?php get_footer();
