<?php

class LipsHTMLErrors {

	const INVALID_HTML_VERSION 				 = 1;

	public static function getErrorMessage ( $error_code ) {

		if ( empty($error_code) ) {

		}

		switch ( $error_code ) {

			case self::INVALID_HTML_VERSION:
				return 'Invalid HTML Version.';
				break;

			default:

				break;
		}
	}
}