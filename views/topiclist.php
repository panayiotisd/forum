<div id='box'> 
	<a href='/../forum/newtopic.php' id='new_topic_button'>Create New Topic</a>
	<h2>Index Board</h2>
	

	<table width="100%" class="topics">
		<tr class="titlebg">
			<td class="topics" >
				<strong>Topic</strong>
			</td>
			<td class="started">
				<strong>Started By</strong>
			</td>
			<td class="replies">
				<strong>Replies</strong>
			</td>
			<td class="posts">
				<strong>Last Post</strong>
			</td>
		</tr>
		
		<?php
			foreach( $topics as $topic ) {
				?><tr><?php
					$td = "<td class='topics' ><a href='http://127.0.0.1/Final%20Assignment/posts.php?topicid=" . $topic[4] . "'>" . $topic[0] . "</a></td>";
					echo $td;
					$td = "<td class='started' >" . $topic[3] . " by " . $topic[1] . "</td>";
					echo $td;
					$td = "<td class='replies' >" . $numberofreplies[ $topic[4] ][ 0 ] . "</td>";
					echo $td;
					$td = "<td class='lastpost' >by " . $author[ $topic[4] ][ 0 ] . "</td>";
					echo $td;
				?></tr><?php
			}
		?>
	</table>

</div>

<div class='empty'>
</div>
<div class='empty'>
</div>