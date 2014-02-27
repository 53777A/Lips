<?php

define( 'NEW_LINE', "\r\n" );

function attr ( &$attr, &$text ) {
	global $indent_counter;

	$new_attr_value = '';

	if ( null !== $attr && null === $text ) {
		if ( '@' === $attr[0] ) {
			$text = null;
		} else {
			$text = $attr;
			$attr = null;
		}
	}

	$text = NEW_LINE . $text . NEW_LINE;

	if ( null !== $attr ) {

		$attr_parsed = explode( '@', trim($attr) );

		foreach ( $attr_parsed as $attr_item ) {

			$attr_item = trim( $attr_item );

			if ( !empty($attr_item) ) {
				list( $key, $value ) = explode( ' ', $attr_item, 2 );
				$new_attr_value .= ' ' . $key . '="' . addcslashes($value, '"') . '"';
			}
		}

		$attr = $new_attr_value;
	}
}

function html ( $attr = null, $text = null ) {
	attr( $attr, $text );
	return '<html' . $attr . '>' . $text . '</html>' . NEW_LINE;
}

function head ( $attr = null, $text = null ) {
	attr( $attr, $text );
	return '<head>' . $text . '</head>' . NEW_LINE;
}

function title ( $attr = null, $text = null ) {
	attr( $attr, $text );
	return '<title>' . $text . '</title>' . NEW_LINE;
}

function body ( $attr = null, $text = null ) {
	attr( $attr, $text );
	return '<body' . $attr . '>' . $text . '</body>' . NEW_LINE;
}

function p ( $attr = null, $text = null ) {
	attr( $attr, $text );
	return '<p' . $attr . '>' . $text . '</p>' . NEW_LINE;
}