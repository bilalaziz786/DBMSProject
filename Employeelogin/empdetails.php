<html>
<head>
	<title>Employee Details</title>
<style>

body {
    background: url("details.jpg");
    background-size: 1400px 900px;
    background-repeat: no-repeat;
    padding-top: 0px;
margin-top:0px; margin-bottom:100px;
}

</style>


</head>

<body>
<?php
if(isset($_POST['add']))
{
$dbhost='localhost';
$dbuser='bilal';
$dbpass='dairymilk';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('COULD NOT CONNECT TO MYSQL'.mysql_error());
}
echo "CONNECTED TO MYSQL</br>";
$tax = mysqli_select_db($conn,'project');
if(!$tax)
{
die('could not select the database'.mysql_error());
}
echo "database selected</br>";
 
$firstname = $_POST['First_Name'];
$lastname = $_POST['Last_Name'];
  $address = $_POST['Address'];

 $birthdate = $_POST['Birth_Date'];
 $gender = $_POST['Gender'];
 $university = $_POST['University'];
 $department =$_POST['Department'];
 $cpi = $_POST['CPI'];
 $country = $_POST['Country'];
$state = $_POST['State'];
$city = $_POST['City'];

 $sql="insert into persona2_details (First_Name,Last_Name,Gender,Birth_Date,State,City,Country,University,Department,CPI,Address) values ('$firstname','$lastname','$gender',$birthdate,'$state','$city','$country','$university','$department',$cpi,'$address');";
$tax=mysqli_query($conn,$sql);
if(!$tax) 
{
 die('could not insert query'.mysql_error());
}
}
else 
{
?>





<form action="<?php $_PHP_SELF ?>" method="post">
<h1> Employee Personal Details</h1>

<p>First Name<br />
<input type="text" name="First_Name" /> 
<p>Last Name<br />
<input type="text" name="Last_Name" />
<p>Gender<br />
<select id="year_start"
         name="Gender" /> 
<option>Male</option>      
    <option>Female</option>  
</select> 
<p>University<br />
<input type="text" name="University" />
<p>Department<br />
<input type="text" name="Department" />
<p>CPI<br />
<input type="text" name="CPI" />
<p>Country<br />
<input type="text" name="Country" />
<p>State<br />
<input type="text" name="State" />
<p>City<br />
<input type="text" name="City" />
<p>Address<br />
<input type="text" name="Address" /></p>
<p>Birth Date<br />
<input type="text" name="Birth_Date" />
<p><input type="submit" name="add" value="Submit" id="add"/></p>
</form>
<?php
}
?>
</body>

</html>