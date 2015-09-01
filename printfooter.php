<?php
	if ( isset( $_COOKIE['userid'] ) ) {
	
		$now = datetime();
		$online = WhoIsOnline ( $now );
		
		echo "<h3>Online Now:</h3><div id='users'>Registered users online: ";
		
		foreach ( $online as $ol ) {
			echo "<span>" . $ol[0] . "</span>,";
		};
		
		echo "</div>";
	}
	
	include 'views/footer.php';
?>