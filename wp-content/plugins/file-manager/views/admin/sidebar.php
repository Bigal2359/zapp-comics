<?php
/**
 * 
 * Security check. No one can access without Wordpress itself
 * 
 * */
if( !defined('ABSPATH') ) die();

?>

<div class='col-sidebar'>
		
	<div class='row'><?php require_once( 'donate.php' ); ?></div>
	<div class='row'><?php require_once( 'extensions.php' ); ?></div>
	
</div>
