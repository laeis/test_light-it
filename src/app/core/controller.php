<?php

class Controller {
	
	public $model;
	public $view;
	public $path;
	
	function __construct()
	{
		$this->view = new View();
		$this->path = array(
			'fb' => FB_URL_AUTH ."?client_id=".FB_CLIENT_ID."&redirect_uri=".urlencode(FB_REDIRECT)."&response_type=code",
			'go' => '#',
			'vk' => '#',
		);
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
