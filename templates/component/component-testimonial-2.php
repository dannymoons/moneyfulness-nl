<?php

$ID = get_the_ID();
$author = get_field('review_author_field', $ID);
$image = get_field('review_image_field', $ID);
$company = get_field('review_company_field', $ID);
$function = get_field('review_function_field', $ID);
$text = get_field('review_text_field', $ID);
$stars = get_field('review_stars_field', $ID);

?>

<div class="testi testi--2">
	<div class="testi__container">
		<div class="testi__header">
			<div class="testi__person">
				<p class="testi__author"><?php echo $author; ?></p>
				<p class="testi__company"><?php echo $company; ?></p>
			</div>
		</div>
		<p class="testi__text">
			<?php echo $text; ?>
		</p>
	</div>
</div>