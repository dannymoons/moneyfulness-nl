<?php defined('ABSPATH') || exit('Forbidden');
[
    'duoheading' => $duoheading,
    'title' => $title,
    'title_pre' => $title_pre,
    'title_main' => $title_main,
    'title_after' => $title_after,
] = $args;

?>


<?php if ($duoheading === false) : ?>

    <h2 class="heading-2">
        <?= $title; ?>
    </h2>

<?php endif; ?>

<?php if ($duoheading === true) : ?>

    <?php if ($title_pre || $title_main || $title_after) : ?>

        <h2 class="heading-2"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h2>

    <?php endif; ?>

<?php endif; ?>