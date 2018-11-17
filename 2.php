<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
</head>
<body>

	<form action="" method="get">
		<input type="text" name="password">
		<button name="pass">Validate</button>
	</form>
	<?php
		if (isset($_GET['pass'])) {
			$pass = $_GET['password'];
			if(preg_match('/^[a-zA-Z_.]{8}$/', $pass)) {
    			echo "$pass VALID";
			}
				else {
   			 echo "$pass TIDAK VALID";
			}	
		}
	?>
</body>
</html>