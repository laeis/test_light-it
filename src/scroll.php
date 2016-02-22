<?php 
if ( isset( $_POST['action'] ) && 'scroll' == $_POST['action'] ) {
	require_once "app/core.php";
	$offset = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : '';
	$limit = LIMIT ;
	print_message_wall( false, $offset, $limit );
}
