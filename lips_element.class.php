<?php

class lips_element {

	private $id = null;

	private $parent = null;

	private $children = array();

	public function __construct ( $parent ) {

		if ( empty($parent) ) {

		}

		$parent = (string) $parent;

		$this->parent = $parent;
	}

	public function appendChild ( $el = null ) {

	}
}