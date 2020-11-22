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
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$rounds=$_POST['rounds'];
		$attended=$_POST['attended'];
		$technical=$_POST['technical'];
		$hr=$_POST['hr'];
		$lang=$_POST['lang'];
		$diff=$_POST['diff'];
		$overall=$_POST['overall'];
		$sql=" insert into experience (company_name,rounds,rounds_attended,tech_experience,hr_experience,language,difficult,overall)  values ('$name','$rounds','$attended','$technical','$hr','$lang','$diff','$overall')";
		if ($con->query($sql)===TRUE) {
  echo "<center><h1>THANK YOU FOR SHARING YOUR EXPERIENCE</h1></center>";
}
else{
  echo "new record not inserted";
}

  
mysqli_close($con);
}
?>
</body>
</html>
		