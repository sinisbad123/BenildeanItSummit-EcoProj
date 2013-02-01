<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Create Event</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="container">
     <center><img src="ecoproj.png" /></center>
<div class="eventin">
<h1>Create an event!</h1>
<form action="eventCreate.php" method="post">

<table>
<tr><td style="text-align: right;">Event Name: </td><td><input type="text" name="eventName" placeholder="Put Event Name Here" required></td></tr>
<tr><td style="text-align: right;">Event Description: </td><td><input type="text" name="description" placeholder="indicate a brief description" required></td></tr>
<tr><td style="text-align: right;">Event Date: </td><td><input type="text" name="date" placeholder="YYYY-MM-DD" required></td></tr>
<tr><td style="text-align: right;">Event Time: </td><td><input type="text" name="time" placeholder="HH:MM" required></td></tr>
<tr><td style="text-align: right;">HashTag for tweets(1): </td><td><input type="text" name="hashtag" placeholder="#heyitsmarcucu" required></td></tr>
<tr><td></td><td>&nbsp; </td></tr>
<tr><td></td><td><input type="submit" value="Create Event"></td></tr>
</table>
</div>
<div style"color: black;>
	<center>
	<br>
      <p><a href="home.php">Go Back</a>.</p>
	</center>
    </div>
</section>
</form>
</body>
</html>