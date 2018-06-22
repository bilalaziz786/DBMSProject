<?php
 
   
   if(isset($_POST['add'])){
$dbhost='localhost';
$dbuser='bilal';
$dbpass='dairymilk';
$db='project';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
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
      // username and password sent from form 

$myusername = $_POST['uname'];
$mypassword = $_POST['psw'];
      
      
      $sql = "SELECT * FROM sign_up2 WHERE Userid = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
    
  
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result)==1) {
          $sql1 = "SELECT * FROM persona2_details WHERE User_id = $myusername";
 $result1 = mysqli_query($conn,$sql1);
    

      
      
		
    if(!$result1) {
      die('Could not get data: ' . mysql_error());
  }
          while($row = mysqli_fetch_array($result1,MYSQL_ASSOC)){
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
     
      }
else
 {
die('Incorrect admin id or password'.mysql_error());
      }
   }
?>


<!DOCTYPE html>
<html lang="en">


<head>
<title>Employee Login</title>
<link rel="stylesheet" type="text/css" href="css/employeelogin.css"/>
<link rel="icon" href=images/favicon.ico" type="favicon">
</head>

<body>
<center> <font size="+30"><font color="white">EMPLOYEE MANAGEMENT</font> </font></center>
<hr>

<div id="container">




<div id="banner"> </div>

<h2><font color="black">Employee Login</font></h2>
<form action = "<?php $_PHP_SELF ?>" method = "post">
  
  <div class="container">
    <label><b><font color="black">Userid</font></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>

    <label><b> <font color="black">Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
        
    <button type="submit" name="add" id="add"><font color="white">Login</font></button><br>
    <input type="checkbox" checked="checked"> <font color="black">Remember me</font>
  </div>

  <div class="container" style="background-color:#f1f1f1">

      <button type="button" onclick="location.href='employeesignup.php';" class="cancelbtn">New User?</button>

    
  </div>
</form>
<hr>
<br>
<div id="footer">


</div>


</body>

</html>
