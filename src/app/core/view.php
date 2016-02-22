<?php

class View {
	
	private static $view = null;

	function generate( $template_view, $content_view = null, $data = null) {
		if( is_array( $data ) ) {		
			extract( $data );
		}
		if( !empty( $content_view ) ) {
			$content_view = 'views/'. $content_view;
		}
		include 'app/themplate/'.$template_view;
	}

	public static function getInstance() {
		if ( self:: $view == null ) {
			self::$view = new Model();
		}
		return self::$view;
	}

}
