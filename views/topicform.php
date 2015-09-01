<div id="box">   

	<h2>Create a new topic</h2>
	<form action="createnewtopic.php" method="post" onsubmit="return check();">
		<div>
            <label>Topic Name:</label>
            <input type="text" name="topicname" id="topicname"/>
        </div>
		
		<div class='empty'></div>
		
		<div class="text">
			<textarea name="post" cols="60" rows="10" value="" id="post" ></textarea>
		</div>
   
		<input type="submit" value="Post!" class='submit' />
	</form>
	
	<?php
		include 'views/emoticons.php';
	?>
	
	<script type="text/javascript">	
		function PutEmo(name) {
			var input = document.getElementById( 'post' );
			var text = input.value;
			
			switch(name) {
				case 'smile':
					text += " :) ";
					input.value = text;
					break;
				case 'confused_smile':
					text += " :S ";
					input.value = text;
					break;
				case 'crying_face':
					text += " :'( ";
					input.value = text;
					break;
				case 'embarrased_smile':
					text += " :$ ";
					input.value = text;
					break;
				case 'open_mouthed_smile':
					text += " :D ";
					input.value = text;
					break;
				case 'sad_smile':
					text += " :( ";
					input.value = text;
					break;
				case 'smile_with_tongue_out':
					text += " :P ";
					input.value = text;
					break;
				case 'steaming_mad':
					text += " :@ ";
					input.value = text;
					break;
				case 'winking_smile':
					text += " ;) ";
					input.value = text;
					break;
			}			
		}
	</script>
	
	<script type="text/javascript">
		function check() {
			var input = document.getElementById( 'topicname' );
			var text = input.value;

			if ( validate( text ) ) {
				return true;
			}
			alert( "Topic's name is empty!" );
			return false;
		}
		function validate( text ) {
			if ( text == '' ) {
				return false;
			}
			return true;
		}
	</script>
	
</div> 
