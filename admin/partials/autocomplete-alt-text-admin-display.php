<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://helloeveryone.me/
 * @since      1.0.0
 *
 * @package    Autocomplete_Alt_Text
 * @subpackage Autocomplete_Alt_Text/admin/partials
 */

$options = get_option('autocomplete_alt_text_options', [] );

?>

<div class=" flex-column gap-s bg-dark-grey-2 text-white padding-l">
    <img class="max-width-10" src="https://helloeveryone.me/wp-content/uploads/HelloEveryone-Logo-300x79.webp" alt="Logo Hello Everyone">
    <address class="text-xs flex-row items-middle gap-xs">
        Desarrollado por&nbsp;<a class="text-white transition-global" href="https://helloeveryone.me" rel="noreferrer" target="_blank">Hello Everyone</a>
    </address>
</div>

<div class="padding-l text-black">
    <h1 class="text-l font-700"> Opciones de <span class="underline">Autocomplete Alt Text</span></h1>
    <p class="margin-top-s text-s">Este plugin autocompleta el texto alternativo de las imagenes con el mismo título de la imagen.</p>
    <hr class="margin-vertical-m">
    <form id="autocomplete_alt_text_form" method="post" action="options.php">
        <table class="form-table widefat striped">
            <tbody>
                <tr>
                    <td colspan="2" style="background: #e9e9e9; font-weight: bold; text-transform: uppercase;">
                        <label for="_aat_activate">¿Activar plugin?</label>
                    </td>
                    <td>
                        <input type="checkbox" name="autocomplete_alt_text_options[_aat_activate]" id="_aat_activate" value="1" <?php checked(isset($options['_aat_activate']), 1); ?>>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <?php
                        settings_fields('autocomplete_alt_text_options_group');
                        do_settings_sections('autocomplete-alt-text');
                        submit_button();
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>

<style>
    #wpcontent {
        padding-left: 0;
    }

    .form-table td,
    .form-table th {
        padding-left: 10px;
    }
</style>