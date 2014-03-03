<?php

class lips_html_document extends lips_element {
	public function nodeName () {
		return 'document';
	}
}

class lips_html_html extends lips_element {
	public function nodeName () {
		return 'html';
	}
}

class lips_html_head extends lips_element {
	public function nodeName () {
		return 'head';
	}
}

class lips_html_body extends lips_element {
	public function nodeName () {
		return 'body';
	}
}

class lips_html_title extends lips_element {
	public function nodeName () {
		return 'title';
	}
}
