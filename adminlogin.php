<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-image: url('blue.png');
			background-size: 100% 100%;
		}
	</style>
</head>
<body>
	<center><h1>ADMIN LOGIN PAGE</h1></center>
	<form action="admindetails.php" method="post">
 <center> <label for="admin"> Admin number:</label></center><br>
  <center><input type="text" id="admin" name="admin"></center><br>
  <center><label for="pass">Password:</label></center><br>
  <center><input type="password" id="pass" name="pass" ></center><br>
  <center><input type="submit" name="submit"></center>
</form>
</body>
</html>