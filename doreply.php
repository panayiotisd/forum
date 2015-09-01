<?php
	include 'models/database.php';
    include 'models/posts.php';
	include 'models/datetime.php';
	
	if ( isset( $_POST[ 'post' ] ) ) {
        $text = $_POST[ 'post' ];
		$now = datetime();
		
        $userid = $_COOKIE['userid'];
		$topicid = $_GET[ 'topicid' ];
		
        $success = CreatePost( $userid, $topicid, $text, $now);
		if ($success) {
			header( 'Location: posts.php?topicid=' . $topicid );
		}
		else {
			echo "error";
		}
    }
?>