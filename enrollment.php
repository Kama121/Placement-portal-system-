<!DOCTYPE html>
<html>
<head>
	<style >
		body{
			background-image: url('enroll.jpg');
			background-size: 100% 100%;
		}
		marquee{
			color: #DC143C;
			font-size: 35px;
		}
		ol.rules{
			font-size: 27px;
			font-family: verdana;
			color: black;
			
		}
	</style>
</head>
<body>
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
		$regno=$_POST['regno'];
		$companyname=$_POST['company'];
		$mail=$_POST['emailid'];
		$sql="insert into company(name,regno,companyname,emailid) values('$name','$regno','$companyname','$mail')";
		if ($con->query($sql)===TRUE) {
  echo " <center><h1> YOU HAVE SUCCESSFULLY ENROLLED IN A COMPANY</h1></center>";
}
else{
  echo "new record not inserted";
}

  
mysqli_close($con);
}
?>
<h1>POINTS TO REMEBER DURING PLACEMENTS</h1>
<ol class="rules">
	<li>Punctuality & preparedness</li>
	<li>Positive Body language</li>
	<li>Appropriate Clothing/attire</li>
	<li>Communication skills</li>
	<li> Comprehension skills</li>
	<li> Enthusiasm & passion</li>
	<li>Attitude</li>
	<li> Readiness for the job</li>
	<li>Honesty and authenticity</li>
	<li>General Awareness</li>
</ol>
<marquee scrollamount="10"
direction="left"
behavior="scroll" >
ALL THE BEST FOR YOUR PLACEMENTS.....DO WELL...
</marquee>
<a href="http://localhost/placement/homepage.html">Click here!</a>
</body>
</html>