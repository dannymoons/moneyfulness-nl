<?php defined('ABSPATH') || exit('Forbidden');

$iconboxes =  get_field('iconbox_items');
$style = get_field('iconbox_style');
?>

<section class="section pt-lg">
    <div class="section__container">
        <div class="grid grid--444">

            <?php foreach ($iconboxes as $iconbox) {

                get_template_part('templates/component/component', 'iconbox', [
                    'iconbox' => $iconbox,
                    'style' => $style,
                ]);
            }
            ?>

        </div>
    </div>
</section>