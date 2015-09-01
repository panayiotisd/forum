<div id='box'> 
	<h2 class='topictitle' id='top'><?php echo $topicname ?></h2>

	<?php	
		foreach( $posts as $post ) {
			echo "<div class='post'>";
			echo "<div class='postinfo'>#By " . $post[1] . " @ " . $post[2] . "</div>";
			echo "<p>" . $post[0] . "</p>";
			echo "</div>";
			//echo "<a href='#top'>Back to top</a>";
			echo "<a href='/../forum/reply.php?topicid=" . $topicid . "' class='reply'>Reply</a>";
			echo "<div class='empty'></div>";
		}
	?>

</div>

<div class='empty'>
</div>
<div class='empty'>
</div>