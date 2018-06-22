<?php
 
   
   if(isset($_POST['add'])){
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

$tty = $_POST['search'];


      $sql = "SELECT * FROM persona2_details WHERE User_id = $tty";
 $result = mysqli_query($conn,$sql);
    

      
      
		
    if(!$result) {
      die('Could not get data: ' . mysql_error());
  }
          while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
          echo "EMP ID :{$row['User_id']}  <br> ".
         "EMP NAME : {$row['First_Name']} <br> ".
         "Last Name : {$row['Last_Name']} <br> ".
         "GENDER : {$row['Gender']} <br> ".
 "UNIVERSITY : {$row['University']} <br> ".
 "DEPARTMENT : {$row['Department']} <br> ".
 "CPI : {$row['CPI']} <br> ".
 "BIRTH DATE : {$row['Birth_Date']} <br> ".
 "STATE : {$row['State']} <br> ".
 "CITY: {$row['City']} <br> ".
 "COUNTRY : {$row['Country']} <br> ".
 "ADDRESS : {$row['Address']} <br> ";
      }

  echo "Fetched data successfully\n";



}



   else if(isset($_POST['add2'])){
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

$tty1 = $_POST['search2'];

       $sql="SELECT * FROM persona2_details WHERE First_Name = '$tty1'";

    
  $result=mysqli_query($conn,$sql);
      
      
		

    if(!$result) {
      die('Could not get data: ' . mysql_error());
  }
          while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
          echo "EMP ID :{$row['User_id']}  <br> ".
         "EMP NAME : {$row['First_Name']} <br> ".
         "Last Name : {$row['Last_Name']} <br> ".
         "GENDER : {$row['Gender']} <br> ".
 "UNIVERSITY : {$row['University']} <br> ".
 "DEPARTMENT : {$row['Department']} <br> ".
 "CPI : {$row['CPI']} <br> ".
 "BIRTH DATE : {$row['Birth_Date']} <br> ".
 "STATE : {$row['State']} <br> ".
 "CITY: {$row['City']} <br> ".
 "COUNTRY : {$row['Country']} <br> ".
 "ADDRESS : {$row['Address']} <br> ";
      }

  echo "Fetched data successfully\n";
   
   
		
}
?>

<html>
<head>
<title> Employee Management </title>

<style>

.button {
    background-color: #dde8dd;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 1px 1px;
    cursor: pointer;
float:left;
}



body {
  margin: 0px;
  padding: 400px;
  height: 0%;
}

body {
    background: url("images.jpg");
    background-size: 1400px 900px;
    background-repeat: no-repeat;
    padding-top: 0px;
margin-top:0px; margin-bottom:100px;
}
.search{

    width: 700px;
    box-sizing: border-box;
    font-size: 25px;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 40px 40px 40px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
float:left;



focus {
    width: 30%;

}
}

.new {float:right; color:black;}

.header h1{color:black;  width=70px; height:40px;  padding:0px;}
</style>
</head>
<body>

<form action = "<?php $_PHP_SELF ?>" method = "post">
<div class="container">

<div class="header">


<h1> <i><font size="100">Employee Management</font></h1>


</div>
</div>



<div class="new">
<a href="empdetails.php"><h3>New Employee?</h3></a>
</div>



<div class="search">
<p>Enter the Name:</p>



  <input type="text" name="search2" placeholder="Search...">

<p><input type="submit" name="add2" value="Search" id="add2"/></p>





<p>Enter Employee ID:</p>

<input type="text" name="search" placeholder="Search...">

<p><input type="submit" name="add" value="Search" id="add"/></p>
  

<br> </br>
 <button type="button" onclick="location.href='admin1.php';" class="cancelbtn">Log Out</button>


</div>



</form>
</body>
</html>
