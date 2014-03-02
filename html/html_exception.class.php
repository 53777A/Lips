<?php

class LipsHTMLException extends Exception {

	public function __construct ( $error_code ) {
		parent::__construct( LipsHTMLErrors::getErrorMessage($error_code), $error_code );
	}
}