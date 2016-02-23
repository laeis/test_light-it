<?php
require_once "config.php"; 
require_once "app/loader.php";


$request = parse_url( $_SERVER['REQUEST_URI'] );
$routes = explode('/', $request['path'] );
require_once"app/models/db_message.php";
require_once"app/models/db_user.php";
include "app/controllers/controller_main.php" ;
include "app/controllers/controller_wall.php" ;
			$controller = new Controller_Main;
	
		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			
			$controller_name = $routes[1];

			if( 'wall' ==$controller_name ){
				$controller_m = new Controller_Wall;
				$controller_m->action_index();
			}

			if( 'logout' == $routes[1] ){
				$controller->action_logout();
			}

		} else {
			
			$controller->action_index();
		}
		// получаем имя экшена
		if ( !empty($routes[2]) ) {
			$action_name = $routes[2];
			
			
		}

/*
if( empty( $_SESSION['access_token'] ) ) { 
	print_register_content( $path );
} else {
	header( 'Location: /chat' );
}*/
?>

