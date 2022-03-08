<?php

/** Footer Layout: 1
 * 
 * has the following columns
 * column 1: company details
 * column 2: opening times
 * column 3: social media link
 * 
 */


// GET FOOTER DATA
// GET COPYRIGHT INFORMATION
$footer_copyright = get_theme_mod('footer_setting_copyright');

// GET COMPANY DETAILS
$company_name = get_field('company_name', 'option');
$company_street = get_field('company_address', 'option');
$company_zipcode = get_field('company_zipcode', 'option');
$company_place = get_field('company_place', 'option');
$company_email = get_field('company_email', 'option');
$company_phone = get_field('company_telephone', 'option');


/** GET OPENING TIMES
 * 
 * openingtimes_repeater	: array with all data
 * 
 * CONTAINS THE FOLLOWING
 * openingtime_days			: day or days the following times apply to
 * openingtime				: time business opens
 * closingtime				: time business closes
 * 
 */
$opening_times_data = get_field('openingtimes_repeater', 'option');


/** GET SOCIAL MEDIA LINKS
 * 
 * socialmedia_repeater	: array with all data
 * 
 * CONTAINS THE FOLLOWING
 * socialmedia_name		: name field within repeater
 * socialmedia_url		: url field within repeater
 * 
 */
$social_media_data = get_field('socialmedia_repeater', 'option');

?>
<footer class="footer footer--1">
	<div class="footer__container">
		<div class="footer__column">
			<p class="footer__title">Producten & diensten</p>
			<?php wp_nav_menu([
				'menu_class' => 'footer__links',
				'container' => '',
				'theme_location' => 'footer-products',
			]); ?>
		</div>
		<div class="footer__column">
			<div class="footer__item">
				<p class="footer__title">Navigatie</p>
				<?php wp_nav_menu([
					'menu_class' => 'footer__links',
					'container' => '',
					'theme_location' => 'footer-menu',
				]); ?>
			</div>
		</div>
		<div class="footer__column">
			<div class="footer__item">
				<p class="footer__title">Bedrijfsgegevens</p>
			</div>
			<?php if ($company_name) : ?>

				<div class="footer__item">
					<!-- DIT IS VOOR LATER, ALS IK DE GROTE SVG CODE GA VERVANGEN -->
					<!-- <svg class="footer__icon icon" fill="currentColor">
					<use xlink:href="#location" href="#location"></use>
					</svg> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="footer__icon" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
						<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
					</svg>
					<span class="footer__text"><?php echo $company_name; ?></span>
				</div>
			<?php endif; ?>

			<div class="footer__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="footer__icon" viewBox="0 0 16 16">
					<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
					<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
				</svg>
				<span class="footer__text"><?php echo $company_street; ?></span>
			</div>
			<div class="footer__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="footer__icon" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
				</svg>
				<span class="footer__text"><?php echo $company_zipcode; ?>, <?php echo $company_place; ?></span>
			</div>
			<div class="footer__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="footer__icon" viewBox="0 0 16 16">
					<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
				</svg>
				<a href="mailto:<?php echo $company_email; ?>" class="footer__link"><?php echo $company_email; ?></a>
			</div>
			<div class="footer__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="footer__icon" viewBox="0 0 16 16">
					<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
				</svg>
				<a href="tel:<?php echo $company_phone; ?>" class="footer__link"><?php echo $company_phone; ?></a>
			</div>
			<div class="footer__item">
				<p class="footer__title">Openingstijden:</p>
			</div>
			<?php
			if (!empty($opening_times_data)) {
				foreach ($opening_times_data as $opening_time) {
					if (!empty($opening_time)) {
						$opening_days = $opening_time['openingtimes_days'];
						$time_open = $opening_time['openingtime'];
						$time_closed = $opening_time['closingtime'];

			?>
						<div class="footer__item">
							<span class="footer__text"><?php echo $opening_days . ': ' . $time_open . ' - ' . $time_closed; ?></span>
						</div>
			<?php
					}
				}
			}
			?>
			<?php
			// SOCIAL MEDIA LOOP
			if (!empty($social_media_data)) {
				foreach ($social_media_data as $socialmedia) {
					if (!empty($socialmedia)) {
						$socialmedia_name = $socialmedia['socialmedia_name'];
						$socialmedia_url = $socialmedia['socialmedia_url'];

			?>
						<div class="footer__item">
							<a href="<?php echo $socialmedia_url; ?>" class="footer__link"><?php echo $socialmedia_name; ?></a>
						</div>
			<?php
					}
				}
			}
			?>
		</div>
	</div>
	</div>
	<div class="footer__credits">
		<p class="footer__text">Robinzon</p>
	</div>
</footer>