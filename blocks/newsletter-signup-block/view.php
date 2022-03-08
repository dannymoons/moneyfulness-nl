<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('newsletter_signup_title');
$text = get_field('newsletter_signup_text');
$image = get_field('newsletter_signup_image');
$content = get_field('newsletter_signup_intro');
$form_id = get_field('newsletter_signup_form_id');
$newsletter_style = get_field('newsletter_signup_style');

// $spacing = get_field('newsletter_signup_spacing');
// $align_text = get_field('newsletter_signup_align_text');
// $align_self = get_field('newsletter_signup_align_self');
// $section_bg_color = get_field('newsletter_signup_bg_color');
// $mirror_content = get_field('newsletter_signup_mirror');



if ($mirror_content === true) {
	$mirror = 'grid--mirror';
}
?>

<?php if ($newsletter_style === 'card') : ?>

	<section class="section py-lg">
		<div class="section__container">
			<div class="grid">
				<div class="signup signup--newsletter">
					<div class="card card--signup">
						<div class="card__img-container">
							<?php

							moonsio_image($image, 'content_regular', [
								'class' => 'card__img',
							]);

							?>
						</div>
						<div class="card__body">
							<h2 class="card__title"><?= $title; ?></h2>
							<div>
								<?= $text; ?>
							</div>
							<?php
							get_template_part('templates/component/component', 'form-contact');
							?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php endif; ?>

<?php if ($newsletter_style === 'regular') : ?>

	<section class="section py-lg">
		<div class="section__container">
			<div class="grid grid--66">
				<div class="grid__col-1">
					<?php

					moonsio_image($image, 'content_regular', [
						'class' => 'grid__img',
					]);

					?>
				</div>
				<div class="grid__col-2 align-self-center">
					<h2 class="heading-2">
						<?= $title; ?>
					</h2>
					<?= $text; ?>

					<?php
					get_template_part('templates/component/component', 'form-contact');
					?>

				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if ($newsletter_style === 'fancy_one') : ?>

	<section class="section">
		<div class="section__container">
			<div class="newsletter newsletter--fancy">
				<div class="newsletter__body">

					<div class="newsletter__content">
						<h2 class="heading-4">
							<?= $title; ?>
						</h2>
						<?= $text; ?>
					</div>

					<div class="newsletter__form">
						<?php
						get_template_part('templates/component/component', 'form-contact');
						?>
					</div>

				</div>
			</div>
		</div>
	</section>

<?php endif; ?>