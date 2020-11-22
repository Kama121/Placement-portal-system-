<!DOCTYPE html>
<html>
<head>
	
</head>
<body style="background-image: url('enroll.jpg'); background-size: 100% 100%;">

<?php

	$host='localhost';
	$username='root';
	$password='';
	$dbname='placement';
	$con=mysqli_connect($host,$username,$password,$dbname);
	if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	if (isset($_POST['submit'])) 
	{
		$sql="select*from company";
	$query=mysqli_query($con,$sql);
	if (!$query) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "<table>
<tr> 
<th>name</th>
<th>regno</th>
<th>companyname</th>
<th>emailid</th>
</tr>";
while($row=mysqli_fetch_array($query))
{
echo "<tr>
<td> ".$row['name'] ."</td>
<td> ".$row['regno'] ."</td>
<td>".$row['companyname']."</td>
<td> " .$row['emailid'] ."</td>
</tr>";
	}
}
mysqli_close($con)
?>

<center><a href="https://mail.google.com/mail/u/3/#inbox?compose=new" style="font-size: 24px;">SEND MAIL</a></center>
</body>
</html>

