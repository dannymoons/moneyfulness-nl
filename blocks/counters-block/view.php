<?php defined('ABSPATH') || exit('Forbidden');

$counters = get_field('counters_repeater');
$style = get_field('counters_style');
$section_spacing = get_field('counters_section_spacing');
$section_bg = get_field('counters_section_bg');
$count = count($counters);
$post_type = get_post_type();

if ($count == '1') {
    $columns = 'grid';
}

if ($count == '2') {
    $columns = 'grid grid--66';
}

if ($count >= '3') {
    $columns = 'grid grid--444';
}


?>

<?php if ($post_type === 'page') : ?>
    <section class="section section--tight <?= $section_bg; ?>">
        <div class="section__container section__container--xs">
            <div class="<?= $columns; ?>">

                <?php if ($counters) {
                    foreach ($counters as $counter) {

                        get_template_part('templates/component/component', 'counter', [
                            'counter' => $counter,
                            'style' => $style,
                        ]);
                    }
                }

                ?>

            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($post_type != 'page') : ?>
    <section class="section section--post-counters">
        <div class="section__container">
            <div class="section__header text-center">
                <h2 class="heading-2">Het resultaat</h2>
            </div>
            <div class="<?= $columns; ?>">

                <?php if ($counters) {
                    foreach ($counters as $counter) {

                        get_template_part('templates/component/component', 'counter', [
                            'counter' => $counter,
                            'style' => $style,
                        ]);
                    }
                }

                ?>

            </div>
        </div>
    </section>
<?php endif; ?>