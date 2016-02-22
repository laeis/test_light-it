<?php

class Model
{

	private static $db = null;
	private $mysqli = null;
	
	public function __construct() {
		$this->mysqli =  new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
		/* check conection */
		if ( $this->mysqli->connect_errno ) {
			if( DEBUG == true ) {
			    printf( "Не удалось подключиться: %s\n", $this->mysqli->connect_error );
			}
			exit();
		}else{ 
			if ( !$this->mysqli->set_charset( "utf8" ) ) {
				if( DEBUG == true )
			    	printf( "Ошибка при загрузке набора символов utf8: %s\n",$this->mysqli->error );
			} else {
				if( DEBUG == true )
			    	printf( "Текущий набор символов: %s\n", $this->mysqli->character_set_name() );
			}
		}
				/* ctreate table for project if not exists */
		if(  ! $this->mysqli->query( "SHOW TABLE STATUS LIKE `Users`" )  ){
			$sql = "CREATE TABLE IF NOT EXISTS `Users` (
						`user_id` mediumint(11) NOT NULL AUTO_INCREMENT,
						`user_social_id` bigint NOT NULL,
						`user_name` varchar(150) NOT NULL,
						`user_first_name` varchar(150) NOT NULL,
						`user_last_name` varchar(150) NOT NULL,
						`user_link` varchar(150) NOT NULL,
						PRIMARY KEY  ( `user_id` )
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			$this->mysqli->query( $sql );
		}

		if( ! $this->mysqli->query(  "SHOW TABLE STATUS LIKE `Messages`" ) ){
			$sql = "CREATE TABLE IF NOT EXISTS `Messages` (
						`message_id` MEDIUMINT NOT NULL AUTO_INCREMENT,
						`message_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
						`message_date_repair` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
						`message_text` varchar(10000) NOT NULL,
						`message_author` MEDIUMINT NOT NULL,
						`message_parent` MEDIUMINT NOT NULL,
						PRIMARY KEY  ( `message_id` ),
						FOREIGN KEY ( `message_author` ) REFERENCES Users( `user_id` )
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			$this->mysqli->query( $sql );
		}

	}
	
	public function get_mysqli() {
		return $this->mysqli;
	}
	
	public static function getDB() {
		if ( self::$db == null ) {
			self::$db = new Model();
		}
		return self::$db;
	}

}