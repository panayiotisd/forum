<?php
	include 'models/expire.php';
	include 'models/users.php';
    include 'models/database.php';
	
	if ( !isset( $_POST[ 'username' ] ) || !isset( $_POST[ 'password' ] ) ) {
        die();
    }
	
	$username = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];
	$userid = AuthenticateUser( $username , $password );

    if ( $userid !== false ) {
        setcookie( 'username' , $username , $expire );
		setcookie( 'userid' , $userid , $expire );
        header( 'Location: index.php' );
    }
    else {
        header( 'Location: login.php?error=yes' );
    }
?>