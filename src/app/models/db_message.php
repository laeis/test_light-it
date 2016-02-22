<?php 

Class Db_Message extends Model {
	
	
	private $mysqli;
	private static $db_message = null;
	public function __construct() {
		if( null ===  parent::get_mysqli() ) {
			parent::__construct();
			$this->mysqli = parent::get_mysqli();	
		} else {
			$this->mysqli = parent::get_mysqli();	
		}
		
	}
	
	public function db_insert_messages( $text, $author_id, $parent_id = FALSE ) {
		$text 		= $this->mysqli->real_escape_string( $text );
		$author_id 	= $this->mysqli->real_escape_string( $author_id );
		$parent_id	= $this->mysqli->real_escape_string( $parent_id );
		$sql = "INSERT INTO `Messages` ( `message_text`,  `message_author`, `message_parent` ) VALUES ( '$text', '$author_id', '$parent_id' )";
		$this->mysqli->query( $sql );
	}

	/* this function update message to db*/
	public function db_update_messages( $text, $message_id ) {
		$text = $this->mysqli->real_escape_string( $text );
		$message_id = $this->mysqli->real_escape_string( $message_id );
		$sql = "UPDATE `Messages` SET `message_text` = '$text', `message_date_repair` = NOW() WHERE `message_id` = $message_id";
		$this->mysqli->query( $sql );
	}

	/* this function get message from db if the parameter is not only used to select parent messages*/
	public  function db_get_messages( $id = false, $child = false, $offset = 0, $limit = false ) {
		if ( $id ) {
			$sql = "SELECT * FROM `Messages` WHERE `message_parent` = $id ORDER BY  `message_date` ASC";
		} else if( $child ){
			$sql = "SELECT `message_parent` FROM `Messages` WHERE `message_parent` != 0 ORDER BY  `message_date` DESC ";
		} else if( $offset > 0 && $limit ) {
			$sql = "(SELECT * FROM `Messages` WHERE `message_parent` = 0 AND `message_id` < $offset ORDER BY `message_id` DESC LIMIT  $limit ) ORDER BY `message_date` DESC";
		} else if( $limit ) {
			$sql = "( SELECT * FROM `Messages` WHERE `message_parent` = 0 ORDER BY `message_id` DESC LIMIT $limit ) ORDER BY `message_date` DESC";
		} else {
			$sql = "SELECT * FROM `Messages` WHERE `message_parent` = 0 ORDER BY  `message_date` DESC ";
		}
		$result_set = $this->mysqli->query( $sql );
		if ( !$result_set ) 
			return false;
		return $this->resultSetToArray( $result_set );
	}

	public function db_get_messages_text( $id ) {
		global $mysqli;
		$sql = "SELECT `message_text` FROM `Messages` WHERE `message_id` = $id LIMIT 1 ";
		$result_set = $this->mysqli->query( $sql );
		return  $result_set->fetch_assoc();
	}
	
	private function resultSetToArray( $result_set ) {
		$array = array();
		while ( $row = $result_set->fetch_assoc() ) {
			$array[] = $row;
		}
		$result_set->free();
		return $array;
	}
	
	public static function getInstance() {
		if ( self::$db_message == null ) {
			self::$db_message = new Db_Message();
		}
		return self::$db_message;
	}


	 // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
	// thus eliminating the possibility of duplicate objects.
	public function __clone() {
		trigger_error('Clone is not allowed.', E_USER_ERROR);
	}
	public function __wakeup() {
		trigger_error('Deserializing is not allowed.', E_USER_ERROR);
	}
	
	
}




/*

if( DEBUG == true ){
	ini_set('display_errors', 'on'); 
}else {
	ini_set('display_errors', 'off'); 
}
error_reporting( E_ALL );

global $mysqli;
$mysqli =  new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );


/* insert demo message if ennable */
if( DEMO_UPLOAD )
	db_demo_insert();





/* for create demo message in table */
function db_demo_insert(){
	global $mysqli;
	$text_lore = "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
	$result_user = db_get_user( 1 );
	if( $result_user->num_rows == 0 ) {
		$user_data = db_insert_user( 1, 'test' );
		while ( $user_data = mysqli_fetch_object( $user_data ) ) {
			$user_id = $user_data->user_id;
		}
	} else {
		$user_id = 1;
	}
	$result = db_get_messages();
	$count = $result->num_rows;
	while( 50 > $count ){
		if( $count == 49 ){
			$result = db_get_messages();
			$count = $result->num_rows;
		}
		$parent_id = '';
		$text = substr( $text_lore, rand( 0, strlen( $text_lore )-1 ), -1 );
		$count ++;
		if( rand( 0 , 10) > 1 ) {
			$message_data = mysqli_query( $mysqli, 'SELECT `message_id` FROM `Messages`' );
			
			while ( $messages = mysqli_fetch_object( $message_data ) ) {
				$message[]  =  $messages->message_id;	
			}
			$rand_keys = array_rand( $message, 1 );
			$parent_id = $message[$rand_keys];
		}
		if( !empty( $text ) )
			db_insert_messages( $text, $user_id, $parent_id );
	}
}

