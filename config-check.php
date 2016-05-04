<?php

/**
 * Info & requirement check from DonDominioAPI.
 * Use `info` to check if everything is correct to use the API & test connection.
 */

//First, put here your API User & Password
define( 'YOUR_API_USER', '' );
define( 'YOUR_API_PASSWORD', '' );

require_once( 'src/DonDominioAPI.php' );

$dondominio = new DonDominioAPI( array(
	'apiuser' => YOUR_API_USER,
	'apipasswd' => YOUR_API_PASSWORD
));

$info = $dondominio->info();
