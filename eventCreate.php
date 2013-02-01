<?php
session_start();

include ('eden.php');

$database = eden('mysql', 'localhost:3306' ,'project_green', 'root', ''); 

$eventName = $_POST["eventName"];
$description = $_POST["description"];
$date = $_POST["date"];
$time = $_POST["time"];
$hashtag = $_POST["hashtag"];

$settings = array(
	'eventName' => $eventName,
	'description' => $description,
	'date' => $date,
	'time' => $time,
	'hashtag' => $hashtag
	);
	
$database->insertRow('tbl_event', $settings);

header("Location: home.php");
exit;
?>