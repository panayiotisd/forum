<?php
	include 'header.php'
?>

<div id="box">
    
	<h2>Register</h2>
    
	<form action="doregister.php" name="register" method="post" onSubmit="return validate_form()">
        <p>
            <strong>Fill in the form!</strong>
        </p>
        
		<?php
			if ( isset( $_GET[ 'missing' ] ) ) {
				?><div class="error">Ορισμένα από τα στοιχεία λείπουν.</div><?php
			}
			else if ( isset( $_GET[ 'exists' ] ) ) {
				?><div class="error">Το όνομα χρήστη υπάρχει ήδη.</div><?php
			}
		?>
		
        <div>
            <label>Choose username:</label>
            <input type="text" name="username" id="username"/>
        </div>
        <div>
            <label>Choose password:</label>
            <input type="password" name="password" id="password"/>
        </div>
        <div>
            <label>Retype password:</label>
            <input type="password" name="retypepassword" id="retypedpassword"/>

        </div>
        <div>
              <label>E-mail:</label>
              <input type="text" name="e-mail" id="email"/><div class='error'>This must be a valid e-mail address</div>
        </div>
       <p><input type="submit" class="submit"  value="Register"/></p>
    </form>
	
</div>

<script type="text/javascript">
	function validate_form() {
		//email validation
		var email = document.getElementById( 'email' );
		var apos = email.value.indexOf("@");
		var dotpos = email.value.lastIndexOf(".");
		if ( apos<1 || dotpos-apos<2 ) {
			alert("This e-mail address ("+email.value+") is not valid");
			return false;
		};
		//password validation
		var password1 = document.getElementById( 'password' );
		var password2 = document.getElementById( 'retypedpassword' );
		if ( (password1.value) != (password2.value) ) {
			alert("You typed different passwords");
			return false;
		};
		if ( password1.value.length <= 3 ) {
            alert( 'Too short password!' );
            return false;
        };
		//username validation
		var uname = document.getElementById( 'username' );
        if ( uname.value.length <= 3 ) {
            alert( 'Too short username!' );
            return false;
        };
		return true;
	}
</script>

<?php
	include 'printfooter.php'
?>