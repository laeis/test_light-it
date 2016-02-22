<?php 

Class Db_User extends Model {
	
	private $mysqli;
	private static $db_user = null;
	public function __construct() {
		if( null ===  parent::get_mysqli() ) {
			parent::__construct();
			$this->mysqli = parent::get_mysqli();	
		} else {
			$this->mysqli = parent::get_mysqli();	
		}
	}
	
	public function db_get_user( $user_social_id ){
		$user_social_id = $this->mysqli->real_escape_string( $user_social_id );
		$sql = "SELECT * FROM  `Users` WHERE `user_social_id` = $user_social_id OR `user_id` = $user_social_id LIMIT 1;";
		$result_set = $this->mysqli->query( $sql );
		return  $result_set->fetch_assoc();
	}

	public function db_insert_user( $user_social_id, $user_name, $user_first_name = "", $user_first_name = "", $user_link = ""){
		$user_social_id = $this->mysqli->real_escape_string( $user_social_id );
		$user_name = $this->mysqli->real_escape_string( $user_name );
		$user_first_name = $this->mysqli->real_escape_string( $user_first_name );
		$user_first_name = $this->mysqli->real_escape_string( $user_first_name );
		$user_link = $this->mysqli->real_escape_string( $user_link );
		$sql = "INSERT INTO `Users` ( `user_social_id`,  `user_name`, `user_first_name`, `user_last_name`, `user_link` ) VALUES ( $user_social_id, '$user_name', '$user_first_name', '$user_first_name', '$user_link' )";
		$success = $this->mysqli->query( $sql );
		if ( $success ) {
			$sql = "SELECT * FROM  `Users` WHERE `user_id` = LAST_INSERT_ID()";
			$last_user = $this->mysqli->query( $sql );	
			return  $last_user->fetch_assoc();
		} else {
			return false;
		}
	}
	
	public static function getInstance() {
		if ( self::$db_user == null ) {
			self::$db_user = new Db_User();
		}
		return self::$db_user;
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