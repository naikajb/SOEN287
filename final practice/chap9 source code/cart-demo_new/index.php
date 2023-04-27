<?php

// Include functions
require_once('inc/functions.inc.php');
// Start the session
session_start();


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>PHP Shopping Cart Demo &#0183; Bookshop</title>
	<link rel="stylesheet" href="css/styles.css" />
</head>

<body>

<div align="center">
<div id="shoppingcart">

<h1>Your Shopping Cart</h1>

<?php
echo writeShoppingCart();
?>

</div>

<div id="booklist">

<h1>Books In Our Store</h1>

<table border="1">
<tr><td align="center"> Item </td><td align="center">Price</td><td align="center" width="100px">Action</td></tr>
<tr><td align="center">"The Craftsman" by Sennett, Richard</td><td align="center"> &pound;14.99</td>
<td align="center" width="100px"><a href="cart.php?action=add&id=1">Add to cart</a></td></tr>
<tr><td align="center">"On Kindness" by Philips, Adam, Taylor</td><td align="center"> &pound;11.99</td>
<td align="center" width="100px"><a href="cart.php?action=add&id=2">Add to cart</a></td></tr>
<tr><td align="center">"Facebook and Philosophy: What's on Your Mind?" by Wittkower, D. E.</td><td align="center"> &pound;12.99</td>
<td align="center" width="100px"><a href="cart.php?action=add&id=3">Add to cart</a></td></tr>
</table>

</div>
</div>
</body>
</html>