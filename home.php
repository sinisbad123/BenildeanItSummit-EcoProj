<?php
session_start();

include ('eden.php');
include ('getHash.php');

$database = eden('mysql', 'localhost:3306' ,'project_green', 'root', ''); 

$query = $database
->search('tbl_event')
->getRows();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<section class="container">
     <center><img src="ecoproj.png" /></center>
<div class="homein">
<h1>HOME</h1>
<tr><td><a href="createEvent.php"><input type="submit" value="Create Event"></a></td><td>&nbsp;</td><td><a href="logout.php"><input type="submit" value="Logout"></a></td></tr>
    <div id="eventsbody">
	<br />
    <embed src="ecoproj.wmv" height="200" width="450" /> 
	<div style="width:450px;height:500px;overflow:scroll;overflow-y:scroll;overflow-x:hidden;">
       <!--Start of FOREACH LOOP-->
		<?php foreach($query as $value): ?>
		<hr>
        <div class="eventbox">
            <!--Event Name -->
			<?php echo $value['eventName'];?>
            <div id="description">
			
				<!--Event description -->
				<tr><td><p><?php echo $value['description'];?></p></td></tr>
			</div>
			<div id="date">
				<!--Event date -->
				<tr><td><p><?php echo $value['date'];?></p></td></tr>
			</div>
			<div id="time">
				<!--Event time -->
				<tr><td><p><?php echo $value['time'];?></p></td></tr>
			</div>
            <div id="hashtags">
                <!--Event description -->
				<tr><td><p><?php echo $value['hashtag'];?></p></td></tr>
            </div>
			<div id="hashtagResults">
				<tr><td><p><?php getTweets($value['hashtag']); ?></p></td></tr>
			</div>
        </div>
		<!--End of FOREACH LOOP-->
		
		<?php endforeach;?>
		</div>
    </div>
</section>
</body>
</html>
