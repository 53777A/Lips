<?php

class html {

	private static $version = null;

	public function __construct ( $version ) {

		require_once __DIR__ . '/html_elements.class.php';
		require_once __DIR__ . '/html_exception.class.php';
		require_once __DIR__ . '/html_errors.class.php';

		self::setVersion( $version );
	}

	public static function getVersion () {
		return self::$version;
	}

	private static function setVersion ( $version ) {

		if ( empty($version) ) {

		}

		$version = (float) $version;

		self::$version = $version;
	}

	public static function getVersions () {

		$versions = array(
			4,
			4.01,
			5,
			5.1
		);

		return $versions;
	}

	public static function loopElements ( &$el, $number_of_args, $args ) {

		if ( 0 < $number_of_args ) {

			foreach ( $args as $arg ) { 
				if ( $arg instanceof LipsElement ) {
					$el->appendChild( $arg );
				} else if ( $arg instanceof LipsElementAttributes ) {
					$el->setAttributes( $arg );
				} else {
					$el->setContent( $arg );
				}
			}
		}
	}

	public static function attr ( $attributes ) {
		return new LipsElementAttributes ( $attributes );
	}

	public static function document () {

		$el = new LipsHTMLTagDocument( self::$version );

		static::loopElements( $el, func_num_args(), func_get_args() );

		return $el;
	}

	public static function html () {

		$el = new LipsHTMLTagHTML( self::$version );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function head () {

		$el = new LipsHTMLTagHead( self::$version );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function body () {

		$el = new LipsHTMLTagBody( self::$version );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function title () {

		$el = new LipsHTMLTagTitle( self::$version );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function p () {

		$el = new LipsHTMLTagP( self::$version );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}
}