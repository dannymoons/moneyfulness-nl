<?php defined('ABSPATH') || exit('Forbidden ');

$title = get_the_title();

?>

<article class="kb-entry">
    <a href="<?php echo get_permalink(); ?>" class="kb-entry__link" title="<?php echo get_the_title(); ?>">
        <?php echo get_the_title(); ?>
    </a>
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="kb-entry__icon" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
    </svg>
</article>