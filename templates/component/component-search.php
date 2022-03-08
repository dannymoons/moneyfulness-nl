<?php defined('ABSPATH') || exit('Forbidden');

$search_settings = processSearchFormSettings(
	get_field('search_settings_posttype'),
	get_field('search_settings_display'),
	get_field('search_settings_orderby'),
	get_field('search_settings_maxposts'),
	get_field('search_settings_minchar'),
	get_field('search_settings_inputdelay')
);
?>
<form action="" class="moonsio-search">
	<div class="moonsio-search__bar">
		<div class="moonsio-search__icontainer">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="moonsio-search__icon" viewBox="0 0 16 16">
				<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
			</svg>
		</div>
		<input type="hidden" class="moonsio-search-settings" value="<?php echo $search_settings; ?>">
		<input type="search" class="moonsio-search__input" name="zoeken" placeholder="Wat zoek je...?">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="moonsio-search__icon moonsio-search-close" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
			<path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
		</svg>
		<div class="moonsio-search-results">
			<div class="moonsio-search-results__container">
			</div>
			<div class="moonsio-search-results-link-container">
				<a href="" class="moonsio-search-results-link-url">All Resultaten</a>
			</div>
		</div>
	</div>
</form>