<?php
require_once "config.php"; 
require_once "app/loader.php";


$request = parse_url( $_SERVER['REQUEST_URI'] );
$routes = explode('/', $request['path'] );
require_once"app/models/db_message.php";
require_once"app/models/db_user.php";
	
		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			
			$controller_name = $routes[1];
		} else {
			include "app/controllers/controller_main.php" ;
			$controller = new Controller_Main;
			$controller->action_index();
		}
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

var_dump( $controller_name, $action_name );
/*
if( empty( $_SESSION['access_token'] ) ) { 
	print_register_content( $path );
} else {
	header( 'Location: /chat' );
}*/
?>

