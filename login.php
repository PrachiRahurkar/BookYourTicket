<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<font size="20px" color="white">LOG IN</font>
	<div id="frm">
	   <form action="process.php" method="POST">
		<p>
		   <label>Username:</label>
                   <input type="text" id="user" name="user" />
		</p>
		<p>
		   <label>Password:</label>
		   <input type="password" id="pass" name="pass" />
		</p>
		<p>
		   <input type="submit" id="btn" value="Login" />		    
		</p>

	   </form>
	</div>

</body>
</html>