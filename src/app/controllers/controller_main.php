<?php 
class Controller_Main extends Controller {

	public $fb_path;

	public $data;

	private $db_user;
	private $db_message;

	private static $controller_main = null;

	function __construct() {
		parent::__construct();
		$this->db_user = new Db_User();
		$this->db_message = new Db_Message();
		if( DEMO_UPLOAD )
			$this->db_demo_insert();
	}

	public function action_index() {
		/* function for oauth with fb*/

		if( empty( $_SESSION['access_token'] ) ){
			if( isset( $_GET['code'] ) ) {
				$accessToken = $this->get_token( $_GET['code'] );
				if ( isset( $accessToken ) ) {
					// Logged in!
					$_SESSION['access_token'] = (string) $accessToken;
					$user_data = $this->check_user_auth();
					if( is_array( $user_data ) ) {
						$_SESSION['author_id'] = $user_data['user_id'];
						$_SESSION['author_name'] = $user_data['user_name'];
					}
					exit('<META HTTP-EQUIV="refresh" CONTENT="0; url=/wall">');
					// Now you can redirect to another page and use the
					// access token from $_SESSION['access_token']
				}
			}
			$this->data['path'] = $this->get_path();
			$this->view->generate( 'header.php' );
			$this->view->generate( 'register.php', 'login_button.php', $this->data );
			$this->view->generate( 'footer.php' );
		} else {
			header( 'Location: /wall' );
		}

	}

	public function action_logout() {
		if( isset( $_GET['action'] ) && ! empty( $_SESSION['access_token'] ) ) {
			if( 'logout' == $_GET['action'] ) {
				unset( $_SESSION['access_token'], $_SESSION['author_id'],  $_SESSION['author_name'] );
				header( 'Location: /' );
			}
		}
	}

	public function get_data( $token ) {	
		$ku = curl_init();	
		$query = "access_token=". $token ;
		curl_setopt( $ku, CURLOPT_URL, FB_GET_DATA."?".$query );
		curl_setopt( $ku, CURLOPT_RETURNTRANSFER, TRUE );
		curl_setopt( $ku, CURLOPT_SSL_VERIFYPEER, FALSE );	
		$result = curl_exec($ku);
		if(!$result) {
			exit(curl_error($ku));
		}	
		return json_decode($result);	
	}

	public function get_token( $code ) {
		$ku = curl_init();	
		$query = "client_id=" . FB_CLIENT_ID . "&redirect_uri=" . urlencode( FB_REDIRECT ) . "&client_secret=" . FB_SECRET . "&code=" . $code;	
		curl_setopt( $ku, CURLOPT_URL, FB_TOKEN . "?" . $query );
		curl_setopt( $ku, CURLOPT_RETURNTRANSFER, TRUE );
		curl_setopt( $ku, CURLOPT_SSL_VERIFYPEER, false );
		$result = curl_exec( $ku );
		if( ! $result ) {
			exit( curl_error( $ku ) );
		}	
		if( $i = json_decode( $result ) ) {
			if($i->error) {
				exit( $i->error->message );
			}
		}
		else {	
			parse_str( $result, $token );	
			if( $token['access_token'] ) {
				return $token['access_token'];
			}
		}
	}

	public function check_user_auth( ){
		global $user_data;
		$user_data = $this->get_data( $_SESSION['access_token'] );
		if( is_object( $user_data ) ){
			$user_name 			= $user_data->name;
			$user_social_id 	= $user_data->id;
		}
		if( !empty( $user_social_id) ){
			$get_user = $this->db_user->db_get_user( $user_social_id );
		}
		if( empty( $get_user ) && ! empty( $user_social_id ) && ! empty( $user_name ) ){
			$insert_user_data = $this->db_user->db_insert_user( $user_social_id, $user_name );
			return $insert_user_data ;
		} else {
			return $get_user ;
		}
	}

	public function db_demo_insert(){
		$text_lore = "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
		$result_user = $this->db_user->db_get_user( 1 );
		$message = array();
		if( empty( $result_user ) ) {
			$user_data = $this->db_user->db_insert_user( 1, 'test' );
			if( !empty( $user_data ) ){
				$user_id = $user_data['user_id'];
			}
		} else {
			$user_id =$result_user['user_id'];
		}
		$result = $this->db_message->db_get_messages();
		$count = count( $result );
		while( 50 > $count ){
			if( $count == 49 ){
				$result = $this->db_message->db_get_messages();
				$count = count( $result );
			}
			$parent_id = '';
			$text = substr( $text_lore, rand( 0, strlen( $text_lore )-1 ), -1 );
			$count ++;
			if( rand( 0 , 10) > 1 ) {
				$message_data = $this->db_message->db_get_messages_id();
				if( ! empty( $message_data ) && is_array( $message_data ) ){
					foreach( $message_data as $messages) {
						$message[]  =  $messages['message_id'];	
					}
				}
				$rand_keys = array_rand( $message, 1 );
				$parent_id = $message[$rand_keys];
			}
			if( !empty( $text ) )
				$this->db_message->db_insert_messages( $text, $user_id, $parent_id );
		}
	}

	public static function getInstance() {
		if ( self:: $controller_main == null ) {
			self::$controller_main = new Controller_Main();
		}
		return self::$controller_main;
	}

}