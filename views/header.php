<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>F - o - 2 - u - m</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf8;" />
        <link rel="stylesheet" type="text/css" href="/../forum/style.css" />
		<link rel="shortcut icon" href="http://img710.imageshack.us/img710/8666/faviconyx.png"/>
    </head>
    <body onload="startTime()">
	
	<div id='falcon'><a href="http://127.0.0.1/forum"><img
		src='/../forum/images/falcon.png'
		alt='logo'
		/></a></div>	
		
	<div class='empty'>
	</div>
	<div class='empty'>
	</div>
	
	<div id='content'>
		<h1 id='header'>Καλώς Ήρθατε στο <strong>|= Ω 2 \_/ ^^</strong> μας!</h1>
		<?php
			if ( isset( $_COOKIE['userid'] ) ) {
				?><p>Welcome, <?php echo $_COOKIE['username']; ?> <a href="http://127.0.0.1/forum/logout.php" id="exit">Αποσύνδεση</a></p><?php
				
				include '/../models/users.php';
				include '/../models/database.php';
				include '/../models/datetime.php';
				
				$now = datetime();
				LastActive( $_COOKIE['userid'] , $now );
			}
			else {
				?><p> Welcome, Guest. Please <a href="http://127.0.0.1/forum/login.php"> Login</a> or  <a href="http://127.0.0.1/forum/register.php" />Register</p><?php
			}
		?>
	</div>
	
	<div class='empty'>
	</div>
	
	<div id='navbar'>
		<a href="recenttopics.php">View Recent Topics</a>
		<a href="index.php" >Index Board</a>
	</div>
	
	<div id='datetime'>
	</div>
	
	
	<script type="text/javascript">
		function startTime() {
			var today=new Date();

			var month = today.getMonth() + 1
			var day = today.getDate()
			var year = today.getFullYear()

			var h=today.getHours();
			var m=today.getMinutes();
			var s=today.getSeconds();

			// add a zero in front of numbers<10
			h=checkTime(h);
			m=checkTime(m);
			s=checkTime(s);
			
			document.getElementById('datetime').innerHTML=day+"/"+month+"/"+year+" - "+h+":"+m+":"+s;
			t=setTimeout('startTime()',500);
		}

		function checkTime(i) {
			if (i<10)
			  {
			  i="0" + i;
			  }
			return i;
		}
	</script>