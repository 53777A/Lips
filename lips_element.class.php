<?php

class lips_element {

	private $id = null;

	private $parent = null;

	private $children = array();

	public function __construct ( $parent = null ) {

		if ( empty($parent) ) {

		}

		// $parent = (string) $parent;

		// $this->parent = $parent;
	}

	public function getParent () {
		return $this->parent;
	}

	public function getChildren () {
		return $this->children;
	}

	public function getChild ( $index ) {
		return $this->children[$index];
	}

	public function appendChild ( $el = null ) {
		$this->children[] = $el;
	}
}