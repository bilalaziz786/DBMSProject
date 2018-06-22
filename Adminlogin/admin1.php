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
      
      
      $sql = "SELECT * FROM admin_details WHERE Admin_id = '$myusername' and Admin_Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
    
  
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result)==1) {
         
         header("location: front.php");
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
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
<link rel="icon" href=images/favicon.ico" type="favicon">
</head>

<body>
<center> <font size="+30"><font color="white">EMPLOYEE MANAGEMENT</font> </font></center>
<hr>

<div id="container">




<div id="banner"> </div>

<h2><font color="white">Admin Login</font></h2>
<form action = "<?php $_PHP_SELF ?>" method = "post">
  
  <div class="container">
    <label><b><font color="white">Username</font></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>

    <label><b> <font color="white">Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
        
    <button type="submit" name="add" id="add" value="Log In"><font color="white">Log In</font></button><br>
    <input type="checkbox" checked="checked"> <font color="white">Remember me</font>
  </div>

  <div class="container" style="background-color:#f1f1f1">

 <button type="button" onclick="location.href='employeelogin.php';" class="cancelbtn">Employee Login</button>


  </div>
</form>
<hr>
<br>
<div id="footer">
  

</div>


</body>

</html>
