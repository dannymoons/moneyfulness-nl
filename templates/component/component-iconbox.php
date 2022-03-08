<?php defined('ABSPATH') || exit('Forbidden');
[
    'iconbox' => $iconbox,
    'style' => $style,

] = $args;
?>

<?php if ($style === 'simple') : ?>
    <div class="iconbox iconbox--simple">
        <svg class="iconbox__icon">
            <use href="#i-<?= $iconbox['icon']; ?>"></use>
        </svg>

        <div class="iconbox__content">

            <?php if ($iconbox['text']) : ?>

                <div class="iconbox__text">
                    <?= $iconbox['text']; ?>
                </div>

            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>

<?php if ($style === 'stacked') : ?>
    <div class="iconbox iconbox--stacked">
        <svg class="iconbox__icon">
            <use href="#i-<?= $iconbox['icon']; ?>"></use>
        </svg>

        <div class="iconbox__content">

            <?php if ($iconbox['title']) : ?>

                <p class="iconbox__title"><?= $iconbox['title']; ?></p>

            <?php endif; ?>

            <?php if ($iconbox['text']) : ?>

                <div class="iconbox__text">
                    <?= $iconbox['text']; ?>
                </div>

            <?php endif; ?>

            <?php if ($iconbox['link']) : ?>

                <a href="<?= $iconbox['link']['url']; ?>" class="iconbox__link" title="Meer over <?= $iconbox['title']; ?>">
                    Meer info
                    <svg class="iconbox__link-icon">
                        <use href="#i-right"></use>
                    </svg>
                </a>

            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>