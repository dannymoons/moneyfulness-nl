<?php defined('ABSPATH') || exit('Forbidden');

// global $post;
// $ID = get_the_ID();
global $post;
$title = get_the_title();
$style = get_field('popup_syle_field');
$data_popup = str_replace(' ', '-', strtolower($title));


?>

<div data-popup-popup="<?= $data_popup; ?>" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <?php the_content(); ?>
        </div>
        <div class="popup__close">
            <svg class=" popup__close-icon icon" width="16px" height="16px" fill="currentColor">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
    </div>
</div>