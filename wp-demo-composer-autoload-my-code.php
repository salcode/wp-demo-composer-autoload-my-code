<?php
/*
 * Plugin Name: WP Demo Composer Autoload My Code
 * Plugin URI:
 * Description: Demo Autoloading my own Classes with Composer by @salcode
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$loader = require 'vendor/autoload.php';

add_filter( 'comment_form_default_fields', 'fe_composer_my_code_comment_form_default_fields' );

function fe_composer_my_code_comment_form_default_fields( $fields ) {
	$comment_form_field = new Comment_Form_Field();
	$fields[ $comment_form_field->get_key() ] = $comment_form_field->get_markup();

	return $fields;
}
