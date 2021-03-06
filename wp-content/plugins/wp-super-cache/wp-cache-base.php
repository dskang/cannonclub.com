<?php
$known_headers = array("Last-Modified", "Expires", "Content-Type", "Content-type", "X-Pingback", "ETag", "Cache-Control", "Pragma");

if (!class_exists('CacheMeta')) {
	class CacheMeta {
		var $dynamic = false;
		var $headers = array();
		var $uri = '';
		var $post = 0;
	}
}

// We want to be able to identify each blog in a WordPress MU install
$blogcacheid = '';
if( defined( 'WP_ALLOW_MULTISITE' ) ) {
	$blogcacheid = 'blog'; // main blog
	if( defined( 'SUBDOMAIN_INSTALL' ) && constant( 'SUBDOMAIN_INSTALL' ) == true ) {
		$blogcacheid = $_SERVER['HTTP_HOST'];
	} else {
		$request_uri = preg_replace('/[ <>\'\"\r\n\t\(\)]/', '', str_replace( '..', '', $_SERVER['REQUEST_URI'] ) );
		if( strpos( $request_uri, '/', 1 ) ) {
			if( $base == '/' ) {
				$blogcacheid = substr( $request_uri, 1, strpos( $request_uri, '/', 1 ) - 1 );
			} else {
				$blogcacheid = str_replace( $base, '', $request_uri );
				$blogcacheid = substr( $blogcacheid, 0, strpos( $blogcacheid, '/', 1 ) );
			}
			if ( '/' == substr($blogcacheid, -1))
				$blogcacheid = substr($blogcacheid, 0, -1);
		}
		$blogcacheid = str_replace( '/', '', $blogcacheid );
	}
}

?>
