<?php
$visitCookie = 0;
$cookieName = 'noOfVisits';

setcookie($cookieName,$visitCookie,time()+(86400 * 30));


