<?php
// error_log( 'class-comment-form-field.php' );
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
