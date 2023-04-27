<?php
date_default_timezone_set('America/Montreal'); //Setting the timezone

if(isset($_COOKIE['count'])){
	$count = ++$_COOKIE['count'];
	$date = date('D M jS H:i:s A T Y');
	setcookie('count', $count,time() + (86400 * 30), "/");
	setcookie('date', $date,time() + (86400 * 30), "/");
}
else{	
	$count = 1;
	$date = date('l jS \of F Y h:i:s A T');
	setcookie('count',$count,time() + (86400 * 30), "/");
	setcookie('date', $date, time() + (86400 * 30), "/");
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exercise 2</title>
</head>
<body>
<?php
date_default_timezone_set('America/Montreal'); //Setting the timezone
if(isset($_COOKIE['count'])){
	echo "<p>Hello, this is the ". $_COOKIE['count']. " time that you are visiting my webpage.</p>";
	echo "<p> Last time you visited my webpage on: ". $_COOKIE['date']."</p>";

}
else{
	echo "Welcome to my webpage!  It is your first time that you are here.";
}
?>
</body>
</html>