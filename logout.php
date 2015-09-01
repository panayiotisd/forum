<?php
    setcookie( 'username' , 'username' , time() - 3600 );
	setcookie( 'userid' , 'userid' , time() - 3600 );
    header( 'Location: index.php' );
?>