<?php defined('ABSPATH') || exit('Forbidden');
$categories = get_terms([
    'taxonomy' => 'knowledge-center-category',
    'hide_empty' => false,
]);

foreach ($categories as $category);

$query_args = [
    'post_type' => 'knowledge-center',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => [
        [
            'taxonomy' => 'knowledge-center-category',
            'field' => 'slug',
            'terms' => $category,
            'operator' => 'IN',
        ]
    ],
];

$query = new WP_Query($query_args);
?>
<div class="categories">
    <span class="categories__title">Bekijk artikelen in: </span>

    <?php foreach ($categories as $category) : ?>

        <a class="category" href="/kennisbank-categorie/<?= $category->slug; ?>" title="<?= $category->name; ?>">
            <?= $category->name; ?><span class=" category__count"><?= $category->count; ?></span>
        </a>

    <?php endforeach; ?>
</div>