<?php
    $con = mysql_connect( '127.0.0.1', 'dbname', 'password' );
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
    mysql_select_db( 'wsfa' );
	header( 'Content-type: text/html; charset=utf8' );
?>