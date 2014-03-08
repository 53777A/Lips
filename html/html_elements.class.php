<?php

class lips_html_document extends lips_element {
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

class lips_html_html extends lips_element {
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

class lips_html_head extends lips_element {
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

class lips_html_body extends lips_element {
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

class lips_html_title extends lips_element {
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
