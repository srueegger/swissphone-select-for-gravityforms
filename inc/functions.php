<?php
/* Add Swiss Phone Format to GravityForms Phone Field */
function spsgf_ch_phone_format( $phone_formats ) {
    $phone_formats['uk'] = array(
        'label'       => 'Switzerland',
        'mask'        => '+41 99 999 99 99',
        'regex'       => '/^(?:\+41|0041|0)?\s?(?:\d{2}\s?\d{3}\s?\d{2}\s?\d{2})$/',
        'instruction' => '+41 79 000 00 00',
    );
 
    return $phone_formats;
}
add_filter( 'gform_phone_formats', 'spsgf_ch_phone_format' );