<?php
	function CreateUser( $username, $password, $email, $now ){
        // Returns userid on success, false on failure
		$password = md5($password);
		
        $res = mysql_query(
            "INSERT INTO
                users
            SET
                name = '$username',
                password = '$password',
				email = '$email',
				avatar = '',
				gender = '',
				status = 'user',
				registered = '$now',
				lastactive = '$now';"
        );
		$id = mysql_insert_id();
        return $id;
    }
	
	function AuthenticateUser( $username, $password ){
        // Returns userid on success, false on failure
		$password = md5($password);
		
        $res = mysql_query(
            "SELECT
                userid
            FROM
                users
            WHERE
                name = '$username'
                AND password = '$password'
            LIMIT 1;"
        );

        if ( mysql_num_rows( $res ) == 1 ) {
            $user = mysql_fetch_array( $res );
            return $user[ 'userid' ];
        }
        
        return false;
    }

	function UserExists( $username ) {
        // returns true if user exists, false if not
        $res = mysql_query(
            "SELECT
                userid
            FROM
                users
            WHERE
                name = '$username'
            LIMIT 1;"
        );
        
        $exists = ( mysql_num_rows( $res ) == 1 );
        
        return $exists;
    }

	function WhoIsOnline( $now ) {
		//returns an array with the online users
		$res = mysql_query(
            "SELECT
                name
            FROM
                users
            WHERE
                (lastactive + INTERVAL 5 MINUTE) > '$now';"
        );
		
		$online = array();
        while ( $onl = mysql_fetch_array( $res ) ) {
            $online[] = $onl;
        }
        
        return $online;
	}
	
	function LastActive( $userid , $now ) {
		//updates the user's status
		mysql_query(
            "UPDATE users
			SET lastactive = '$now'
			WHERE userid = '$userid'
			LIMIT 1"
        );		
	}

	function UserInfo($username) {
		// returns an array with user info
		$res = mysql_query(
			"SELECT
				username, avatar, gender, status, register
			 FROM
				users
			 WHERE
				username = '$username';"
		);

		$userinfo = array();
        while ( $uinfo = mysql_fetch_array( $res ) ) {
            $userinfo[] = $uinfo;
        }
        
        return $userinfo;
	}
?>