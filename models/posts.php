<?php
	include 'models/emoticons.php';

	function GetPosts( $topicid ) {
	//gets a topicid
	//returns an array with every post in the specified topic
        $res = mysql_query(
            "SELECT
                text, users.name as username, created
            FROM
                posts, users
            WHERE
                posts.userid = users.userid && posts.topicid = $topicid
            ORDER BY
                created ASC;"
        );
        
        $rows = array();
        while ( $row = mysql_fetch_array( $res ) ) {
            $rows[] = $row;
        }
        
        return $rows;
    }
	
    function CreatePost( $userid, $topicid, $text, $now ){
	//gets userid, topicid and content of the post and time of creation
	//returns true on success, false on failure
		$text = ConvertEmoticons ( $text );

        $res = mysql_query( 
            "INSERT INTO
                posts
            SET
				userid = $userid,
				topicid = $topicid,
                text = '$text',
                created = '$now';"
        );
        return (mysql_affected_rows() == 1);
    }
	
	function CreateTopic( $userid, $now, $info, $name ){
	//gets userid, topic info name of the topic and time of creation
	//returns topicid
		$text = ConvertEmoticons ( $text );

        $res = mysql_query( 
            "INSERT INTO
                topics
            SET
				userid = $userid,
				info = '$info',
                name = '$name',
                created = '$now';"
        );
        $id = mysql_insert_id();
        return $id;
    }
	
	function GetTopics() {
	//returns an array with all the topics
        $res = mysql_query(
            "SELECT
                topics.name as topicname, users.name as username, info, created, topicid
            FROM
                topics, users
            WHERE
                topics.userid = users.userid
            ORDER BY
                created DESC;"
        );
        
        $rows = array();
		
        while ( $row = mysql_fetch_array( $res ) ) {
            $rows[] = $row;
        }
        
        return $rows;
    }
	
	function GetRecentTopics( $time ) {
	//returns an array with the most recent topics
        $res = mysql_query(
            "SELECT
                topics.name as topicname, users.name as username, info, created, topicid
            FROM
                topics, users
            WHERE
                topics.userid = users.userid && created > '$time'
            ORDER BY
                created DESC;"
        );
        
        $rows = array();
		
        while ( $row = mysql_fetch_array( $res ) ) {
            $rows[] = $row;
        }
        
        return $rows;
    }
	
	function GetLastPost( $topicid ){
	//gets a topicid
	//returns the author and the datetime of the last post in the specified topic
        $res = mysql_query(
            "SELECT
                users.name as username, posts.created
            FROM
                posts, users
            WHERE
                posts.userid = users.userid && posts.topicid = $topicid
            ORDER BY
                created DESC
			LIMIT 1;"
        );
		
		$rows = array();
        while ( $row = mysql_fetch_array( $res ) ) {
            $rows[] = $row;
        }
        
        return $rows;
    }
	
	function GetTopicName( $topicid ){
		$res = mysql_query(
            "SELECT
                name
            FROM
                topics
            WHERE
				topicid = $topicid
			LIMIT 1;"
        );
		$name = array();
		$name = mysql_fetch_array( $res );
		return $name['name'];
	}
	
	/*function GetTopicid( $topicname ){
		$res = mysql_query(
            "SELECT
                topicid
            FROM
                topics
            WHERE
				name = '$topicname'
			LIMIT 1;"
        );
		echo $res;		
		$id = array();
		$id = mysql_fetch_array( $res );
		return $id['topicid'];
	}*/
?>