<?php
function writeShoppingCart() {
	
    /*if(!isset($_SESSION['cart']))
	    return '<p>You have no items in your shopping cart</p>';*/
	
	$cart = $_SESSION['cart'];
	if (!$cart) {
		return '<p>You have no items in your shopping cart</p>';
	} else {
		// Parse the cart session variable
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<p>You have <a href="cart.php">'.count($items).' item'.$s.' in your shopping cart</a></p>';
	}
}

function showCart() {

	$cart = $_SESSION['cart'];
	if ($cart) {
		$items = explode(',',$cart);
		$contents = array();
		foreach ($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		$output[] = '<form action="cart.php?action=update" method="post" id="cart">';
		$output[] = '<table>';
		$total = 0;
		foreach ($contents as $id=>$qty) {
			$title = "n"; $author="m"; $price="3";
			switch($id){
			   case "1": $title= "The Craftsman";
			             $author ="Sennett, Richard";
			             $price =  "14.99";
			             break;
			
			   case "2": $title= "On Kindness";
			             $author ="Philips, Adam, Taylor";
			             $price =  "11.99";
			             break;
			             
			   case "3": $title= "Facebook and Philosophy: What's on Your Mind?";
			             $author ="Wittkower, D. E.";
			             $price =  "12.99";
			             break;
			
		    }
			$output[] = '<tr>';
			$output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
			$output[] = '<td>'.$title.' by '.$author.'</td>';
			$output[] = '<td>&pound;'.$price.'</td>';
			$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
			$output[] = '<td>&pound;'.($price * $qty).'</td>';
			$total += $price * $qty;
			$output[] = '</tr>';
		}
		$output[] = '</table>';
		$output[] = '<p>Grand total: <strong>&pound;'.$total.'</strong></p>';
		$output[] = '<div><button type="submit">Update cart</button></div>';
		$output[] = '</form>';
	} else {
		$output[] = '<p>You shopping cart is empty.</p>';
	}
	return join('',$output);
}
?>
