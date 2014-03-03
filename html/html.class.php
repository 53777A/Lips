<?php

class html {

	private static $currentNodePath = null;
	private static $nodeStack = array();

	public function __construct () {

		require_once __DIR__ . '/html_elements.class.php';
		require_once __DIR__ . '/html_selector.class.php';
		require_once __DIR__ . '/html_exception.class.php';
		require_once __DIR__ . '/html_errors.class.php';
	}

	public static function getCurrentNode () {
		return static::$currentNodePath;
	}

	public static function setCurrentNode ( $node ) {

		if ( empty($node) ) {

		}

		static::$currentNodePath = $node;
	}

	public static function loopElements ( &$el, $number_of_args, $args ) {
		
		if ( 0 < $number_of_args ) {

			foreach ( $args as $arg ) { 
				$el->appendChild( $arg );
			}
		}
	}

	public static function document () {

		static::setCurrentNode( 'root' );

		$el = new lips_html_document( static::getCurrentNode() );

		static::setCurrentNode( $el->nodeName() );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}

	public static function html () {

		$el = new lips_html_html( static::getCurrentNode() );

		static::setCurrentNode( $el->nodeName() );

		static::loopElements( $el, func_num_args(), func_get_args() );
		
		return $el;
	}
}