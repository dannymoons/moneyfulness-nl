<?php defined('ABSPATH') || exit('Forbidden');

/**
 * This function will return an array of GF forms
 * which can be used as the value for the choices key
 * in a forms select in ACF.
 * 
 * @see https://docs.gravityforms.com/api-functions/#get-forms
 * 
 * @return array
 */
function get_all_forms(): array
{
    $forms = [];
    $forms[''] = __('Selecteer een formulier', '_SBB');

    foreach (GFAPI::get_forms() as $form) {
        $forms[$form['id']] = $form['title'];
    }

    return $forms;
}
