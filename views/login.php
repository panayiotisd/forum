<?php
	include 'header.php'
?>

<div id="box">
    <h2>Login</h2>
	
    <form action="dologin.php" method="post" class="login" onsubmit="return check();">
	
		<?php
            if ( isset( $error ) ) {
                ?><div class="error">Invalid username or password!</div><?php
            }
        ?>
		
		<div>
            <label>Username:</label> <input type="text" name="username" id="username" />
        </div>
		
        <div>
            <label>Password:</label> <input type="password" name="password" />
        </div>
		
        <p><input type="submit" value="Login" class="submit" /></p>
		
    </form>
</div>

	<script type="text/javascript">
        function check() {
            var input = document.getElementById( 'username' );
            if ( input.value.length <= 3 ) {
                alert( 'Too short username!' );
                return false;
            }
            return true;
        }
    </script>
	
<?php
	include 'printfooter.php'
?>           
