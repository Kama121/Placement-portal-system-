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
	if (isset($_POST['signup'])) {
		$name=$_POST['field1'];
		$regno=$_POST['field2'];
		$email=$_POST['field3'];
		$stuphno=$_POST['field4'];
		$age=$_POST['field5'];
		$deptname=$_POST['field6'];
		$fname=$_POST['field7'];
		$mname=$_POST['field8'];
		$parphno=$_POST['field9'];
		$address=$_POST['field10'];
		$pass=$_POST['field11'];
		$year=$_POST['field12'];
		$cgpa1=$_POST['field13'];
		$cgpa2=$_POST['field14'];
		$cgpa3=$_POST['field15'];
		$cgpa4=$_POST['field16'];
		$cgpa5=$_POST['field17'];
		$cgpa6=$_POST['field18'];
		$cgpa7=$_POST['field19'];
		$cgpa8=$_POST['field20'];
		$arrear=$_POST['field21'];
		
$sql="insert into placement_students(name,regno,emailid,student_phnno,age,department_name,father_name,mother_name,parent_phnno,address,password,passedoutyear,cgpa1,cgpa2,cgpa3,cgpa4,cgpa5,cgpa6,cgpa7,cgpa8,noofarrears) values ('$name','$regno','$email','$stuphno','$age','$deptname','$fname','$mname','$parphno','$address','$pass','$year','$cgpa1','$cgpa2','$cgpa3','$cgpa4','$cgpa5','$cgpa6','$cgpa7','$cgpa8','$arrear')";
if ($con->query($sql)===TRUE) {
  echo "<h1>YOU HAVE SUCCESFULLY SIGNED IN</h1>";
}
else{
  echo "new record not inserted";
}

  
mysqli_close($con);
}
?>
<h4 style="font-family: verdana;color: black">Redirect to login page<a href="http://localhost/placement/login.html"> Click here</a></h4>
</body>
</html>

