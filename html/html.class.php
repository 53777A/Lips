<?php

class html {

	public function __construct () {

		require_once __DIR__ . '/html_elements.class.php';
		require_once __DIR__ . '/html_exception.class.php';
		require_once __DIR__ . '/html_errors.class.php';
	}

	public static function loopElements ( &$el, $number_of_args, $args ) {

		if ( 0 < $number_of_args ) {

			foreach ( $args as $arg ) { 
				if ( $arg instanceof LipsElement ) {
					$el->appendChild( $arg );
				} else {
					$el->setContent( $arg );
				}
			}
		}
	}

	public static function document () {

		$el = new LipsHTMLTagDocument();

		static::loopElements( $el, func_num_args(), func_get_args() );

		return $el;
	}

	public static function html () {

		$el = new LipsHTMLTagHTML();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function head () {

		$el = new LipsHTMLTagHead();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function body () {

		$el = new LipsHTMLTagBody();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function title () {

		$el = new LipsHTMLTagTitle();

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}
}