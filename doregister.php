<?php
	include 'models/expire.php';
	include 'models/users.php';
    include 'models/database.php';
	include 'models/datetime.php';
	
    if ( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) && isset( $_POST[ 'e-mail' ] ) ) {
        $username = $_POST[ 'username' ];
        $password = $_POST[ 'password' ];
		$email = $_POST[ 'e-mail' ];
		$now = datetime();
		
        $exists = UserExists( $username );
		
        if ( !$exists ) {
            $userid = CreateUser( $username, $password, $email, $now);
            
			setcookie( 'username' , $username , $expire );
			setcookie( 'userid' , $userid , $expire );
            header( 'Location: index.php' );
        }
        else {
            header( 'Location: register.php?exists=true' );
        }
    }
    else {
        header( 'Location: register.php?missing=true' );
    }
?>