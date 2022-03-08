<?php defined('ABSPATH') || exit('Forbidden');

// [
//     'image' => $image,
//     'style' => $style,
//     'intro' => $intro,
// ] = $args;

$title = get_the_title();
// $title_short = strlen($title) > 50 ? substr($title, 0, 45) . "..." : $title;

?>

<div class="post__list-item">
    <a href="<?php echo get_permalink(); ?>" class="link" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
</div>