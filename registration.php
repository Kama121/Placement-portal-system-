
<!DOCTYPE html>
<html>
<head>
	<style >
		.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #2E5894;
	margin: 10px auto;
	padding: 20px;
	background: #2E5894;
	border-radius: 4px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 80%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#2E5894;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 10px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: white;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #2E5894;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #2E5894;
}


	</style>
</head>
<h2><center>PLACEMENT REGISTRATION FORM</center></h2>
<body style="background-image:url('blue.png');">

<div class="form-style-5">
<form action="newlogin.php" method="post">
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="field1" placeholder="name ">
<input type="text" name="field2" placeholder=" regno ">
<input type="email" name="field3" placeholder=" emailid ">
<input type="text" name="field4" placeholder=" student_phnno ">
<input type="text" name="field5" placeholder=" age ">
<input type="text" name="field6" placeholder=" department_name ">
<input type="text" name="field7" placeholder=" father_name ">
<input type="text" name="field8" placeholder=" mother_name ">
<input type="text" name="field9" placeholder=" parent_phoneno ">
<textarea name="field10" placeholder="address"></textarea>
<input type="text" name="field11" placeholder=" password ">
<input type="text" name="field12" placeholder=" passedoutyear ">
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="field13" placeholder="cgpa1"></textarea>
<textarea name="field14" placeholder="cgpa2"></textarea>
<textarea name="field15" placeholder="cgpa3"></textarea>
<textarea name="field16" placeholder="cgpa4"></textarea>
<textarea name="field17" placeholder="cgpa5"></textarea>
<textarea name="field18" placeholder="cgpa6"></textarea>
<textarea name="field19" placeholder="cgpa7"></textarea>
<textarea name="field20" placeholder="cgpa8"></textarea>
<textarea name="field21" placeholder="noofarrears"></textarea>
</fieldset>

<input type="submit" value="signup" name="signup" />
</form>
</div>
</body>
</html>