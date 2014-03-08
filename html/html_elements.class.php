<?php

class LipsHTMLTagDocument extends LipsElement {
	public function nodeName () {
		return 'document';
	}
	public function openingTag () {
		return '<doc type>';
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
		return '<html>';
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
		return '<head>';
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
		return '<body>';
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
		return '<title>';
	}
	public function closingTag () {
		return '</title>';
	}
}
