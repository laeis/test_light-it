<?php 
require_once "app/core.php";
$page = isset( $_GET['page'] ) ? intval( $_GET['page'] ) : '';
if ( isset( $_POST['send-message'] ) && !empty( $_SESSION['access_token'] ) ){
	$message_text = !empty( $_POST['text-message'] ) ? trim( htmlspecialchars( strip_tags( $_POST['text-message'] ) ) ) : '';
	
	$author_id = ! empty( $_POST['author_id'] ) ? trim( intval( $_POST['author_id'] ) ) : '';
	/* Для редактирования сообщения*/
	if (  ! empty( $_POST['current_id'] ) ) {
		$message_id = trim( intval(  $_POST['current_id'] ) );
		if( $author_id == $_SESSION["author_id"] ) {
			 db_update_messages( $message_text, $message_id );
			 /* Используется чтобы не отправлять форму повторно при обновлении окна*/
			 header( 'Location: /chat' );
		}
	/* Для коментрования сообщения*/
	} else if (   ! empty( $_POST['parent_id'] ) ) {
		$message_parent_id = trim( intval(  $_POST['parent_id'] ) );
		if( $author_id == $_SESSION["author_id"] ) {
			db_insert_messages( $message_text, $author_id, $message_parent_id ) ;
			header( 'Location: /chat' ); 
		}
	/* Для добавления нового сообщения*/
	}else if( !empty( $message_text ) && $author_id == $_SESSION["author_id"] ) {
		db_insert_messages( $message_text, $author_id ) ;
		header( 'Location: /chat' );
	}
}
print_content( $path, $page );