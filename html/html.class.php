<?php

class html extends lips {

	public function __construct () {

		require_once __DIR__ . '/html_elements.class.php';
		require_once __DIR__ . '/html_exception.class.php';
		require_once __DIR__ . '/html_errors.class.php';
	}

	public static function document () {
		
		$el = new lips_html_document();

		parent::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function html () {
		
		$el = new lips_html_html();

		parent::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}
}