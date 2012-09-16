<?php
/**
 * PHP LANGUAGE DETECTION SCRIPT
 * 
 * based on the source of Mischa Szeker (www.szeker.ch)
 * @see       http://www.szeker.net/2011/02/10/php-language-detection-script/
 * @author    fb
 * @version   09/14/2012
 * 
 * 
 * Usage:
 * - Put the this file in the root of your website
 * - Path to language versions is www.yourdomain.com/<2-digit language code>
 *   Example: www.yourdomain.com/en
 * - List of available languages has to be stored in variable $langs where the first language is the default language
 *   (if there is no match with the users browser language)
 * - Change the $cookie_domain variable to reflect your domain name – and do not forget to include the leading "."!
 * - The language menu should point to the root directory of your website and 
 *   include the language code in the URL (eg. www.yourdomain.com/?lang=en)
 */
 
// Setting variables
$langs         = array( 'en', 'de' );
$cookie_name   = 'lang_cookie';
$cookie_domain = '.inpsyde.com';
$set_cookie    = TRUE; // Set cookie?

if ( ! empty($_GET['lang']) && in_array( $_GET['lang'], $langs ) ) {
	
	// Set language
	$lang = $_GET['lang'];
	
	// Set cookie
	$set_cookie = TRUE;
	
} else {
	
	// Check if cookie exists
	if ( isset( $_COOKIE[$cookie_name] ) && ! empty( $_COOKIE[$cookie_name] ) && in_array( $_COOKIE[$cookie_name], $langs ) ) {
	
		// Get cookie and set language
		$lang = $_COOKIE[$cookie_name];
	
	} else {
	
		/* Get browser language */
		if ( ! empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ) {
			
			$browserlang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			$li          = 999;
			$lang        = $langs[0];
			
			foreach( $langs as $l ) {
				$x = strpos( $browserlang, $l );
				if ( $x !== FALSE && $x < $li ) {
					$li = $x;
					$lang = $l;
				}
			}
			
		} else {
			
			$lang = $langs[0];
		}
		
	}
}
 
// Redirect
header( 'Location: /' . $lang . '/' ) ;

// Finally set cookie
if ( $set_cookie )
	setcookie( $cookie_name, $lang, time() + ( 60 * 60 * 24 * 365), '/', $cookie_domain );
