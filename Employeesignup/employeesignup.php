<!DOCTYPE html>
<html>

<head>
<title>Employee Signup</title>
<link rel="stylesheet" type="text/css" href="css/empsignup.css"/>
<link rel="icon" href=images/favicon.ico" type="favicon">
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
 
$userid = $_POST['uid'];
$password = $_POST['psw'];
  $phone = $_POST['phone'];

 $email = $_POST['email'];

 $sql="insert into sign_up2 (Userid,Password,Phone,Email) values ('$userid','$password','$phone','$email');";
$tax=mysqli_query($conn,$sql);
if(!$tax) 
{
 die('could not insert query'.mysql_error());
}
}
else 
{
?>


<div id="container">




<div id="banner"> </div>

<font color="white"><h2>Signup Form</h2></font>

<form action="<?php $_PHP_SELF ?>" method="post" style="border:1px solid #ccc">
  <div class="container">
    <label><font color="white"><b>User ID</b></font></label>
    <input type="text" placeholder="Enter User ID" name="uid" required>

    <label><font color="white"><b>Password</b></font></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

<label><font color="white"><b>Phone</b></font></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>
 <label><font color="white"><b>Email</b></font></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <input type="checkbox" checked="checked"><font color="white"> Remember me</font>
    <p><font color="white">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</font></p>

    <div class="clearfix">
      
      <button type="button" onclick="location.href='employeelogin.php';" class="cancelbtn">Existing User?</button>
      <button type="submit" name="add" id="add" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
<?php
}
?>

</body>
</html>
