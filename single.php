<?php

/**
 * Post page
 * 
 * POST DIVIDED INTO FOLLOWING PARTS
 * Post Head (Title, Date, Category, Image)
 * Post Body (Text and Media of post (WYSIWYG))
 * Post Footer (Author Name, Image, Bio, Social Media)
 * Contact Form
 * Related Articles
 * 
 */

get_header();

?>
<div class="container py-5">
	<div class="row gx-lg-5">
		<div class="col-lg-8 mb-4">
			<?php
			get_template_part('template-parts/post-header');
			?>
			<!-- DIT IS VOOR LATER
				<div class="row">
					<div class="col-sm-12 text-center">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-circle me-3" height="50" width="50" alt="" loading="lazy" />
					</div>
				</div>
			EINDE VOOR LATER -->
			<?php
			get_template_part('template-parts/post-body');
			get_template_part('template-parts/post-footer');
			?>
		</div>
		<?php
		get_template_part('template-parts/post-contact');
		?>
	</div>
</div>
<?php
get_template_part('template-parts/post-related');
?>
<style>
	.bg-light-blue {
		background: #E3F2FD;
	}

	h1,
	h2,
	h3,
	h4 {
		color: #000;
	}
</style>
<?php
get_footer();
