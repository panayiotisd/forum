<?php
    include 'models/database.php';
    include 'models/posts.php';
	include 'views/header.php';
    
	$topicid = $_GET['topicid'];
	$topicname = GetTopicName( $topicid );
    $posts = GetPosts( $topicid );
    include 'views/postlist.php';
	include 'printfooter.php';
?> 