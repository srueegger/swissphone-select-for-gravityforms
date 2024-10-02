<?php
/**
 * Plugin Name: SwissPhone Select for GravityForms
 * Plugin URI:  https://github.com/srueegger/SwissPhone-Select-for-GravityForms
 * Description: SwissPhone Select for GravityForms is a lightweight WordPress plugin that adds Switzerland (+41) as a selectable option for phone number fields in your GravityForms. Make it easier for Swiss users to fill out forms by providing a convenient country code option and enhancing the overall user experience.
 * Version:     1.0.2
 * Author:      Samuel Rüegger
 * Author URI:  https://rueegger.me
 * License:     GPL-2.0
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 * Text Domain: swissphone-select-for-gravityforms
 * Requires at least: 6.6
 * Requires PHP: 8.1
 *
 * Copyright (c) 2017 Pascal Birchler (email: swissspidy@chat.wordpress.org)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @package PreferredLanguages
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

/* Check if GravityForms is active */
function spsgf_activation_check() {
  if ( !is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
    deactivate_plugins( plugin_basename( __FILE__ ) );
    wp_die( esc_attr__( 'Please install and Activate GravityForms.', 'swissphone-select-for-gravityforms' ), 'Plugin dependency check', array( 'back_link' => true ) );
  }
}

register_activation_hook( __FILE__, 'spsgf_activation_check' );

/**
 * Plugin functions.
 */
require_once __DIR__ . '/inc/functions.php';