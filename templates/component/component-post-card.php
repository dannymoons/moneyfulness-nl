<?php defined('ABSPATH') || exit('Forbidden ');

global $post;
$ID = get_the_ID();

[
    'style' => $style,

] = $args;


$post_type = get_post_type();

if ($post_type === 'blog') {
    $intro = get_field('blog_intro_text_field', $ID);
    $image = get_field('blog_featured_img_field', $ID);
} else if ($post_type === 'kennisbank') {
    $intro = get_field('knowledge_center_intro_text_field', $ID);
    $image = get_field('knowledge_center_featured_img_field', $ID);
} else if ($post_type === 'project') {
    $intro = get_field('project_intro_text_field', $ID);
    $image = get_field('project_featured_img_field', $ID);
}

get_template_part('templates/layout/layout', 'post-card', [
    'image' => $image,
    'style' => $style,
    'intro' => $intro,
    'post_tpe' => $post_type,
]);
