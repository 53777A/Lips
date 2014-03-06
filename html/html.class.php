<?php

class html {

	public function __construct () {

		require_once __DIR__ . '/html_elements.class.php';
		require_once __DIR__ . '/html_selector.class.php';
		require_once __DIR__ . '/html_exception.class.php';
		require_once __DIR__ . '/html_errors.class.php';
	}

	public static function loopElements ( &$el, $number_of_args, $args ) {

		if ( 0 < $number_of_args ) {

			foreach ( $args as $arg ) { 
				$el->appendChild( $arg );
			}
		}
	}

	public static function document () {

		$el = new lips_html_document();

		static::loopElements( $el, func_num_args(), func_get_args() );

		return $el;
	}

	public static function html () {

		$el = new lips_html_html();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function head () {

		$el = new lips_html_head();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function body () {

		$el = new lips_html_body();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function title () {

		$el = new lips_html_title();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}
}