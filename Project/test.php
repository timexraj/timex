<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Sample/style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#F37508">
	<div>
			<div class="trt" align="center">
			<h1 align="center"><font color="#FCF6F6"> Registration Form </font></h1></div>
				<div class="ttr">
					<form method="post" action="checkuser.php" >
						<input type="text" placeholder="First Name" name="firstname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" placeholder="Last Name" name="lastname"><br>
						<input type="text" placeholder="Username" name="username"><br>
						<input type="password" placeholder="password" name="password" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="password" placeholder="Repassword" name="repassword" ><br>
						<input type="text" placeholder="Address" name="address"><br>
						<input type="text" placeholder="email" name="email" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" placeholder="contact" name="contact" ><br>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female<br><br>
						<input  type="submit" value="Sign Up" name="submit" >
						<input  type="reset" value="Clear" >
					</form>
				  </div>
			</div>

</body>
</html>
