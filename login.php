<?php
    if ( isset( $_GET[ 'error' ] ) && $_GET[ 'error' ] == true ) {
        $error = true;
    }
    include 'views/login.php';
?>