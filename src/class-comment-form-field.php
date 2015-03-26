<?php
// error_log( 'class-comment-form-field.php' );
// if you uncomment this error_log line,
// you'll see this file is ONLY loaded
// when this class is instantiated (any page with a contact form)
class Comment_Form_Field {
	public function __construct() {
	}
	public function get_key() {
		return 'twitter';
	}
	public function get_markup() {
		return '<p class="comment-form-twitter">'
			.  '<label for="twitter">Twitter</label> '
			.  '<input id="twitter" name="twitter" type="text" value="" size="30"/>'
			.  '</p>';
	}
}
