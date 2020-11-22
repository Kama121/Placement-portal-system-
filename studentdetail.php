<!DOCTYPE html>
<html>
<head>
  <style >
    body{
      background-image: url('det.jpg');
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
    marquee{
    font-size: 38px;
    color:    #ff0066;
  }
  .but1{
width: 300px;
height: 40px;

}
.but2{
width: 300px;
height: 40px;
}
.cont{
    text-align: center;
}
  </style>
</head>
<body>
  <center><h1 style="color: #b30059">STUDENT DETAILS</h1></center>
    <marquee scrollamount="10"
direction="left"
behavior="scroll" >
WELCOME TO YOUR HOME PAGE.......
</marquee>
	<?php
	$host='localhost';
	$username='root';
	$password='';
	$dbname='placement';
	$regno=$_POST['registerno'];
	$con=mysqli_connect($host,$username,$password,$dbname);
	if (!$con) 
	{
		echo "connection unsuccesfull";
	}
	$s="select*from placement_students";
	$x=mysqli_query($con,$s);
	for (; $row=mysqli_fetch_assoc($x);) { 
    if ($row['regno']==$regno)
     {
      
      echo "<h4> NAME:-</h4>" ."<h5>".$row['name'] ." </h5>";
      echo "<h4> REGISTER NO</h4>" ."<h5>".$row['regno'] ."</h5>";
      echo "<h4>EMAIL ID</h4>" ."<h5>" .$row['emailid'] ."</h5>";
      echo "<h4>STUDENT PHONE NO</h4>" ."<h5>".$row['student_phnno'] ."</h5>";
      echo "<h4>AGE</h4>" ."<h5>" .$row['age'] ."</h5>";
      echo "<h4>DEPARTMENT NAME</h4>" ."<h5>".$row['department_name'] ."</h5>";
      echo "<h4>FATHER NAME</h4>" ."<h5>".$row['father_name'] ."</h5>";
      echo "<h4>MOTHER NAME </h4>"."<h5>" .$row['mother_name'] ."</h5><br>";
      echo "<h4>PARENT PHONE NO </h4>"."<h5>" .$row['parent_phnno'] ."</h5><br>";
      echo "<h4>ADDRESS </h4>"."<h5>" .$row['address'] ."</h5><br>";
      echo "<h4>YEAR OF PASSING </h4>"."<h5>" .$row['passedoutyear'] ."</h5><br>";
      echo "<h4>1ST SEM CGPA </h4>"."<h5>" .$row['cgpa1'] ."</h5><br>";
      echo "<h4>2ND SEM CGPA </h4>"."<h5>" .$row['cgpa2'] ."</h5><br>";
      echo "<h4>3RD SEM CGPA </h4>"."<h5>" .$row['cgpa3'] ."</h5><br>";
      echo "<h4> 4TH SEM CGPA </h4>"."<h5>" .$row['cgpa4'] ."</h5><br>";
      echo "<h4>5TH SEM CGPA </h4>"."<h5>" .$row['cgpa5'] ."</h5><br>";
      echo "<h4>6TH SEM CGPA </h4>"."<h5>" .$row['cgpa6'] ."</h5><br>";
      echo "<h4>7TH SEM CGPA </h4>"."<h5>" .$row['cgpa7'] ."</h5><br>";
      echo "<h4>8TH SEM CGPA </h4>"."<h5>" .$row['cgpa8'] ."</h5><br>";
      echo "<h4>NO OF ARREARS </h4>"."<h5>" .$row['noofarrears'] ."</h5><br>";
                  
    }
}
mysqli_close($con);
?>
<center><h3 style="font-family: verdana;color: white">ARE YOU WILLING TO SEE THE UPCOMING COMPANIES?  </h3></center>   
<div class="cont">
<center><button class="but1" onclick="document.location='http://localhost/placement/companies.html'"> yes</button></center>
<button class="but2" onclick="document.location='http://localhost/placement/login.html'"> no</button>
</div>
</body>
</html>