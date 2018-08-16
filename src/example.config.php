<?php 
/*config for DB conection*/
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** MySQL database username */
define( 'DB_USER', 'username' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** The name of the database for project */
define( 'DB_NAME', 'database_name' );


/*config for FB AUTH*/
define( "FB_URL_AUTH", "https://www.Facebook.com/dialog/oauth" );
/* Credentials you get from registering a new application */
/*the id you get from facebook*/
define( "FB_CLIENT_ID", "[id you get from facebook]" );
/*the secret you get from facebook */
define( "FB_SECRET", "[secret you get from facebook]" );
/* Should match Site URL */
define( "FB_REDIRECT", "[Site URL]" );
/* OAuth endpoints given in the Facebook API documentation */
define( "FB_TOKEN", "https://graph.Facebook.com/oauth/access_token" );
define( "FB_GET_DATA", "https://graph.Facebook.com/me" );
define( "FB_GRAPH", "https://graph.Facebook.com/" );

/* define for DEBUG option */
/* Change this to true to enable the display of notices during development.*/
define( "DEBUG", false );

/* for create demo messages */
/* Change this to true to reate demo messages */
define( "DEMO_UPLOAD", false );

/* for pagination  */
/* Specify the number of messages on a single page */
define( "LIMIT", 15 );
