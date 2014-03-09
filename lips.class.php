<?php

class Lips {

	private $nodes 				= null;
	private $class 				= null;
	private $type 				= null;
	private $version 			= null;
	private $supported_versions = array();
	private $doctype 			= null;

	public function __construct ( $type, $version ) {

		if ( empty($type) ) {
			
		}

		$this->setType( $type );

		require_once __DIR__ . '/lips_element.class.php';

		switch ( $this->type ) {

			case 'html':

				require_once __DIR__ . '/html/html.class.php';

				$this->supported_versions = html::getVersions();

				if ( !empty($version) ) {
					$this->setVersion( $version );
				}

				$this->class = new html( $this->version );
			
				break;
		}
	}

	public function render () {

		$node = current( $this->nodes );
		$node->render();
	}

	public function setType ( $type ) {

		if ( empty($type) ) {

		}

		$type = (string) $type;

		$this->type = $type;
	}

	private function setVersion ( $version ) {

		if ( empty($version) ) {

		}

		if ( empty($this->supported_versions) || !is_array($this->supported_versions) ) {
			
		}

		$version = (float) $version;

		if ( in_array($version, $this->supported_versions) ) {
			$this->version = $version;
		} else {

		}
	}

	public function getVersion () {
		return $this->version;
	}

	public function setDoctype ( $doctype ) {

		if ( empty($doctype) ) {

		}
	}

	public function create ( $node ) {
		$this->nodes[$node->nodeName()] = $node;
	}
}

