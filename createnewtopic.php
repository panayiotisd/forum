<?php
	include 'models/database.php';
    include 'models/posts.php';
	include 'models/datetime.php';
	
	if ( isset( $_POST[ 'topicname' ] ) && isset( $_POST[ 'post' ] ) ) {
		$name = $_POST[ 'topicname' ];
        $text = $_POST[ 'post' ];
		$info = '';
		$now = datetime();
		
        $userid = $_COOKIE['userid'];
		
        $topicid = CreateTopic( $userid, $now, $info, $name);
		
		$success = CreatePost( $userid, $topicid, $text, $now);
		if ($success) {
		header( 'Location: posts.php?topicid=' . $topicid );
		}
		else {
			echo "error";
		}
    }
?>