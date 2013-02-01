<?php
include ('eden.php');
session_start();

function redirect() {
header ('Location: home.php');
exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$database = eden('mysql', 'localhost:3306' ,'project_green', 'root', ''); 

$query = $database
->search('tbl_users')
->filterByUsername($username)
->filterByPassword($password)
->getRow();

$_SESSION['user'] = array(
'Name' => $query['FirstName'],
'Username' => $query['username']
);

?>
<!DOCTYPE HTML>
<html>
<title>Log-in</title>
<body>
<?php
if (!$query) {
	die('<h1>Wrong username and password </h1><p><a href="index.php">Back to Log-in Page.</a></p>' . mysql_error());
	unset($_SESSION['user']);
	header("Location: index.php");
	exit;
} else {
redirect();
}
?>
</body>
</html>