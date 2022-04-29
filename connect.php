<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','sri');

// get the post records
$fullname = $_POST['fullname'];
$youremail = $_POST['youremail'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// database insert SQL code
$sql = "INSERT INTO `sri` (`fullname`, `youremail`, `password`, `confirmpassword`) VALUES ('$fullname', '$youremail', 'password', '$confirmpassword')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Log in</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/roboto-font.css"><link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
 <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">\
<div class="page-content">
<div class="form-v5-content">
<form class="form-detail" action="FeedBack.html"
method="post">
<h2>Login</h2>
<div class="form-row">
<label for="full-name">User
Name</label>
<input type="text" name="full-name"
id="full-name" class="input-text" placeholder="Your Name"
required>
<div class="form-row">
<label for="password">Password</label>
<input type="password"
name="password" id="password" class="input-text"
placeholder="Your Password" required>
<div><center>
<input type="submit" name="Login"
class="register" value="Login"></div></center>
<div><center>
<a href="Signup.html" title="signup"
id="link-reset" style="text-decoration: none;" >New User?Click here
to Sign up!</a>
</div></center>
</form>
</div>
</div>
</body>
</html>
