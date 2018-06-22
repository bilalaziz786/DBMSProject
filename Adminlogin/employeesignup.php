<!DOCTYPE html>
<html>

<head>
<title>Employee Signup</title>
<link rel="stylesheet" type="text/css" href="css/empsignup.css"/>
<link rel="icon" href=images/favicon.ico" type="favicon">
</head>


<body>

<div id="container">




<div id="banner"> </div>

<font color="white"><h2>Signup Form</h2></font>

<form action="/action_page.php" style="border:1px solid #ccc">
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
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
