<?php

class Controller {
	
	public $model;
	public $view;
	protected $path;
	
	function __construct() {
		$this->view = new View();

	}
	
	function action_index() {
		// todo	
	}

	protected function get_path() {
		$this->path = array(
			'fb' => FB_URL_AUTH ."?client_id=".FB_CLIENT_ID."&redirect_uri=".urlencode(FB_REDIRECT)."&response_type=code",
			'go' => '#',
			'vk' => '#',
		);
		return $this->path;
	}
}
