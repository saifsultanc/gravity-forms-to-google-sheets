<?php 
/*
Plugin Name: Gravity Forms to Google Sheets
Plugin URI: -
Description: Send data from Gravity Forms to Google Sheets
Version: 1.0
Author: Saif Sultan
Author URI: https://www.saifsultan.co
License: GPL-2.0+
*/

add_action('gform_after_submission', 'send_data_to_google_sheet', 10, 2);
function send_data_to_google_sheet( $entry, $form ) {

  // get data from $entry

  // prepare the data

  // open the google docs link to send data

  // send data to google docs
}

?>