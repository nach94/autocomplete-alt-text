<?php

class Autocomplete_Alt_Text_Functions {
    public function __construct() {
        add_action('add_attachment', [$this, 'auto_image_alt']);
    }

    public function auto_image_alt($attachment_id) {
        $options = get_option('autocomplete_alt_text_options', []);
        if(isset($options['_aat_activate']) && $options['_aat_activate'] == 1) {
            $mime_type = get_post_mime_type($attachment_id);
            if (strpos($mime_type, 'image') !== false) {
                $image_title = get_the_title($attachment_id);
                update_post_meta($attachment_id, '_wp_attachment_image_alt', $image_title);
            }
        }
    }
}

new Autocomplete_Alt_Text_Functions;