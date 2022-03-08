<?php defined('ABSPATH') || exit('Forbidden');

// $button = $args['button'];
global $post;
$ID = get_the_ID();
$video_id = get_field('youtube_video_id_field', $ID);


?>

<section>
    <div class="youtube-player" data-id="<?= $video_id; ?>">
    </div>
</section>