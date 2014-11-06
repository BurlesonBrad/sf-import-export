<?php
/*
 * Plugin Name: StoreFront Import Export
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: Import ane Export
 * Author: Dwain Maralack
 * Author URI: http://dwainm.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: sf-import-export
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-sf-import-export.php' );

/**
 * Returns the main instance of sf-import-export to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object sf-import-export
 */
function sf_import_export () {
	$instance = SF_Import_Export::instance( __FILE__, '1.0.0' );

	return $instance;
}

sf_import_export();