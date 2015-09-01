<?php
    include 'models/database.php';
    include 'models/posts.php';
    
    $topics = GetTopics();
	//count the number of posts inside a topic
	$numberofreplies = array();
	$metritis = 0;
	foreach( $topics as $topic ) {
		$posts = GetPosts( $topic[4] );
		foreach( $posts as $post) {
			$metritis += 1;
		}
		$numberofreplies[ $topic[4] ][ 0 ] = $metritis;
		$metritis = 0;
	}
	//Get Last Post's Author
	$lastposts = array();
	$author = array();
	foreach( $topics as $topic ) {
		$lastposts = GetLastPost( $topic[4] );
		foreach( $lastposts as $lastpost ) {
			$author[ $topic[4] ][ 0 ] = $lastpost[0];
		}
	}
	
    include 'views/topiclist.php';
?> 