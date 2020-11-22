<!DOCTYPE html>
<html>
<head>
  <style >
    body{
      background-image: url('enroll.jpg');
      background-size: 100% 100%;
    }
     h4{
    color: white;
    font-size: 22px;
   text-align: left;
   padding-left: 300px;
  }
  h5{
    color:   #990000;
    font-size: 22px;
    text-align: left;
    padding-left: 420px;
  }
</style>
<body>
    <center><h1 style="color: #b30059">EXPERIENCE </h1></center>
    <?php
	$host='localhost';
	$username='root';
	$password='';
	$dbname='placement';
	$compname=$_POST['name'];
	$con=mysqli_connect($host,$username,$password,$dbname);
	if (!$con) 
	{
		echo "connection unsuccesfull";
	}
	$s="select*from experience";
	$x=mysqli_query($con,$s);
	for (; $row=mysqli_fetch_assoc($x);) { 
    if ($row['company_name']==$compname)
     {
      
      echo "<h4>  COMPANY NAME:-</h4>" ."<h5>".$row['company_name'] ." </h5>";
      echo "<h4>TOTAL NO OF ROUNDS</h4>" ."<h5>".$row['rounds'] ."</h5>";
      echo "<h4>NO OF ROUNDS ATTENDED</h4>" ."<h5>" .$row['rounds_attended'] ."</h5>";
      echo "<h4>TECHNICAL ROUND EXPERIENCE</h4>" ."<h5>".$row['tech_experience'] ."</h5>";
      echo "<h4>HR  ROUND EXPERIENCE</h4>" ."<h5>" .$row['hr_experience'] ."</h5>";
      echo "<h4>THE MOST PREFFERED LANGUAGE</h4>" ."<h5>".$row['language'] ."</h5>";
      echo "<h4>DIFFICULTIES FACED</h4>" ."<h5>".$row['difficult'] ."</h5>";
      echo "<h4>OVER ALL EXPERIENCE </h4>" ."<h5>".$row['overall'] ."</h5> ";
      break;
         }
         else{
         	echo "NO ONE HAS  SHARED THEIR EXPERIENCE .....TRY AGAIN LATER..";
         }
}
mysqli_close($con);
?>
<a href="http://localhost/placement/homepage.html">Click here!</a>
</body>
</head>