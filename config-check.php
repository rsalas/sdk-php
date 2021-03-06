<?php

/**
 * Info & requirement check from DonDominioAPI.
 * Use `info` to check if everything is correct to use the API & test connection.
 */
 
header( "Content-Type: text/plain; charset=utf-8" );

// First, put here your API User & Password
define( 'YOUR_API_USER', '' );
define( 'YOUR_API_PASSWORD', '' );

ini_set( 'display_errors', '1' );
error_reporting( E_ALL );

require_once( 'src/DonDominioAPI.php' );

try{
	$dondominio = new DonDominioAPI( array(
		'apiuser' => YOUR_API_USER,
		'apipasswd' => YOUR_API_PASSWORD
	));
	
	$info = $dondominio->info();
}catch( \DonDominioAPI_Error $e ){
	print( "\r\n" );
	printf( " Error initializing SDK: " . $e->getMessage());
	print( "\r\n" );
	print( "\r\n" );
	print( " Edit config-check.php and check your settings, then try again." );
}

?>
