<?php

class Controller_Wall extends Controller {

	public $data;

	private $db_message;

	private static $controller_message = null;

	function __construct() {
		parent::__construct();
		$this->db_message = new Db_Message();

	}

	public function action_index() {
		$page = isset( $_GET['page'] ) ? intval( $_GET['page'] ) : '';
		if ( isset( $_POST['send-message'] ) && !empty( $_SESSION['access_token'] ) ){
			$message_text = !empty( $_POST['text-message'] ) ? trim( htmlspecialchars( strip_tags( $_POST['text-message'] ) ) ) : '';
			
			$author_id = ! empty( $_POST['author_id'] ) ? trim( intval( $_POST['author_id'] ) ) : '';
			if (  ! empty( $_POST['current_id'] ) ) {
				$message_id = trim( intval(  $_POST['current_id'] ) );
				if( $author_id == $_SESSION["author_id"] ) {
					$this->db_message->db_update_messages( $message_text, $message_id ); 
				}
			} else if (   ! empty( $_POST['parent_id'] ) ) {
				$message_parent_id = trim( intval(  $_POST['parent_id'] ) );
				if( $author_id == $_SESSION["author_id"] ) {
					$this->db_message->db_insert_messages( $message_text, $author_id, $message_parent_id ) ; 
				}
			}else if( !empty( $message_text ) && $author_id == $_SESSION["author_id"] ) {
				$this->db_message->db_insert_messages( $message_text, $author_id ) ;
			}
		}

		$this->data['path'] = $this->path;
		$this->data['self'] = $this;
		$this->view->generate( 'header.php' );
		$this->view->generate( 'content.php', array( 'login_button.php', 'form.php' ), $this->data );
		$this->view->generate( 'footer.php' );

		//print_content( $path, $page );
	}

	public function print_message_wall( $messages_id =false, $offset=false, $limit=false ) {
		$messages_child_id = array();
		if( is_array( $messages_id ) ){
			$messages_data = $messages_id;
		} else {
			$messages_data = $this->db_message->db_get_messages( $messages_id , false, $offset, $limit );
		}
		$all_messages = array();
		if( !empty( $messages_data ) ) { 
			foreach ( $messages_data as $message ) {
				$messages_child = $this->db_message->db_get_messages( $message['message_id'] );
				$this->data['message'] = $message;
				$this->data['messages_child'] = $messages_child;
				$this->data['self'] = $this;
				$this->view->generate( 'message.php', false, $this->data );
			}
		}	
	}
	
	public function print_messages_text( $messages_id ){
		$messages_id = ( trim( intval(  $messages_id ) ) );
		return $this->db_message->db_get_messages_text( $messages_id );

	}


	public static function getInstance() {
		if ( self:: $controller_message == null ) {
			self::$controller_message = new Controller_Message();
		}
		return self::$controller_message;
	}

}