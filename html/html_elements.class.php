<?php

class LipsElementAttributes {

	private $attributes = null;
	private $parsedAttributes = array();
	private $attributesString = '';

	public function __construct ( $attributes = null ) {

		if ( empty($attributes) ) {

		}

		$this->attributes = (string) $attributes;

		preg_match_all( '/@([^@\s]+)\s([^@]+)/', trim($this->attributes), $this->parsedAttributes, PREG_SET_ORDER );

		if ( empty($this->parsedAttributes) OR !is_array($this->parsedAttributes) ) {

		}

		foreach ( $this->parsedAttributes as $attributeData ) {
			$this->attributesString .= $attributeData[1] . '="' . trim( $attributeData[2] ) . '" ';
		}
	}

	public function getAttributes () {
		return $this->attributesString;
	}
}

class LipsHTMLTagDocument extends LipsElement {
	public function nodeName () {
		return 'document';
	}
	public function openingTag () {
		$attributes = $this->getAttributes();

		return '<doc type ' . $attributes . '>';
	}
	public function closingTag () {
		return '</doc type>';
	}
}

class LipsHTMLTagHTML extends LipsElement {
	public function nodeName () {
		return 'html';
	}
	public function openingTag () {
		$attributes = $this->getAttributes();

		return '<html ' . $attributes . '>';
	}
	public function closingTag () {
		return '</html>';
	}
}

class LipsHTMLTagHead extends LipsElement {
	public function nodeName () {
		return 'head';
	}
	public function openingTag () {
		$attributes = $this->getAttributes();

		return '<head ' . $attributes . '>';
	}
	public function closingTag () {
		return '</head>';
	}
}

class LipsHTMLTagBody extends LipsElement {
	public function nodeName () {
		return 'body';
	}
	public function openingTag () {
		$attributes = $this->getAttributes();

		return '<body ' . $attributes . '>';
	}
	public function closingTag () {
		return '</body>';
	}
}

class LipsHTMLTagTitle extends LipsElement {
	public function nodeName () {
		return 'title';
	}
	public function openingTag () {
		$attributes = $this->getAttributes();

		return '<title ' . $attributes . '>';
	}
	public function closingTag () {
		return '</title>';
	}
}

class LipsHTMLTagP extends LipsElement {
	public function nodeName () {
		return 'p';
	}
	public function openingTag () {
		$attributes = $this->getAttributes();
		
		return '<p ' . $attributes . '>';
	}
	public function closingTag () {
		return '</p>';
	}
}
