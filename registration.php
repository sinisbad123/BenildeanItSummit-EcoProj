<?php
include ('eden.php');

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$password = $_POST["password"];
$email =  $_POST["email"];
$userType = 0;

$database = eden('mysql', 'localhost:3306' ,'project_green', 'root', ''); 

$settings = array(
'username' => $username,
'Password' => $password,
'FirstName' => $firstName,
'LastName' => $lastName,
'Email' => $email,
'userType' => $userType
);

$database->insertRow('tbl_users', $settings);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Registration Successful!</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="container">
     <center><img src="ecoproj.png" /></center>
    <div class="login">
<p>Registration Successful!</p><br>

<tr><td><p><a href="index.php"><input type="submit" value="Log-in to your account" /></a></p></td></tr>
</div>
</section>
</body>
</html>