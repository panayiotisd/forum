<?php
	if ( !( isset($_COOKIE[ 'userid' ]) ) ) {
		header( 'Location:http://127.0.0.1/forum/login.php' );
	}
	else {
		include 'views/header.php';
		include 'topics.php';
		include 'printfooter.php';
	}
?>