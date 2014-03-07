<?php

class Lips {

	private $nodes 		= null;
	private $class 		= null;
	private $type 		= null;
	private $version 	= 0;

	public function __construct ( $type, $version = 0 ) {

		if ( empty($type) ) {
			
		}

		$type 		= (string) $type;
		$version 	= (int) $version;

		$this->setType( $type );

		if ( !empty($version) ) {
			$this->setVersion( $version );
		}

		require_once __DIR__ . '/lips_element.class.php';

		switch ( $type ) {

			case 'html':
				require_once __DIR__ . '/html/html.class.php';
				$this->class = new html();
				return $this->class;
				break;
			
			default:
				
				break;
		}
	}

	public function render () {
		
	}

	public function setType ( $type ) {

		if ( empty($type) ) {

		}
	}

	public function setVersion ( $version, $supported_versions ) {

		if ( empty($version) ) {

		}

		if ( !is_array($supported_versions) ) {
			
		}

		$version = (string) $version;

		if ( in_array($version, $supported_versions) ) {
			$this->version = $version;
		} else {

		}
	}

	public function create ( $node ) {
		$this->nodes[$node->nodeName()] = $node;
	}

	public function select ( $selector ) {

		if ( empty($selector) ) {

		}

		$selectorObject = new LipsHTMLSelector( $selector, $this->nodes );

		return $selectorObject->getNodes();
	}
}

