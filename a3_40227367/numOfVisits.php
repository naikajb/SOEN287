<?php
$visitCookie = 0;
$cookName = 'noOfVisits';

setcookie($cookName, $visitCookie, time() + (86400 * 30));

date_default_timezone_set('America/Toronto');
$last = 0;
$cookName2 = "last_visit";

setcookie($cookName2, $last, time() + (86400 * 30));

if (!isset($_COOKIE[$cookName])) {
    $cookieVal = 1;
} else {
    $cookieVal = $_COOKIE['num_visits'] + 1;
}
setcookie($cookName, $cookieVal, time() + (86400 * 30));

$lastTime = date("D M d H:i:s T Y");
$lastTime = date("D M d H:i:s T Y");
setcookie($cookName2, $last, time() + (86400 * 30));