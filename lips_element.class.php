<?php

class LipsElement {

	private $id = null;

	private $class = null;

	private $parent = null;

	private $content = null;

	private $children = array();

	private $attributes = null;

	private $version = null;

	public function __construct ( $version ) {
		$this->setVersion( $version );
	}

	public function getAttributes () {
		return $this->attributes;
	}

	public function setAttributes ( $attributes = null ) {

		if ( empty($attributes) ) {

		}

		if ( false === ($attributes instanceof LipsElementAttributes) ) {

		}

		$this->attributes = (string) $attributes->getAttributes();
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

	public function setContent ( $content = null ) { 
		$this->content = (string) $content;
	}

	public function getContent () {
		return $this->content;
	}

	public function setVersion ( $version ) {

		$version = (float) $version;

		if ( empty($version) || 0 >= $version ) {

		}

		$this->version = $version;
	}

	public function getVersion () {
		return $this->version;
	}

	public function render () {

		echo $this->openingTag();

		if ( !empty($this->content) ) {
			echo $this->content;
		} else if ( !empty($this->children) ) {
			foreach ( $this->children as $child ) {
				$child->render();
			}
		}

		echo $this->closingTag();
	}
}