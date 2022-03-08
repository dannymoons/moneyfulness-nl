<?php defined('ABSPATH') || exit('Forbidden');

$form_id = get_field('contact_form_id');
$form_style = get_field('contact_form_style')

?>

<div class="moonsio-form <?= $form_style; ?>">
    <?php gravity_form($form_id, false, false, false, '', true) ?>
</div>