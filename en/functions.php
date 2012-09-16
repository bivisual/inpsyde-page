<?php
/**
 * Helpers and functions
 * 
 * @since    05/10/2012
 * @version  05/10/2012
 * @author   fb
 */

/** 
 * Echo content of an variable
 * 
 * @since    05/10/2012
 * @version  05/10/2012
 * @author   fb
 */
function get_var( $var = FALSE ) {
	
	if ( ! isset( $var ) )
		return;
	
	if ( empty ( $var ) )
		return;

	echo $var;
}

/**
 * Return an array of file names and folders in directory
 * 
 * @since    05/10/2012
 * @version  05/10/2012
 * @author   fb
 */
function read_folder_directory( $dir = NULL ) {
	
	if ( empty( $dir ) )
		return;
	
	$list_dir = array();
	
	if ( $handler = opendir( $dir ) ) {
		
		while ( FALSE !== ($sub = readdir( $handler ) ) ) {
			
			if ( $sub != '.' && $sub != '..' ) {
				if ( is_file( $dir . '/' . $sub ) ) {
					$list_dir[] = $sub;
				} else if ( is_dir( $dir . '/' . $sub ) ) {
					$list_dir[$sub] = ReadFolderDirectory( $dir . '/' . $sub );
				}
			}
		}
		
		closedir( $handler );
		
	}
	
	return $list_dir;
}

function include_section( $folder ) {

	$files = read_folder_directory ( dirname( __FILE__ ) . '/' . $folder );

	if ( $files ) {
		foreach ( $files as $file ) {
			require_once( dirname( __FILE__ ) . '/' . $folder . '/' . $file );
		}
	} 
}
