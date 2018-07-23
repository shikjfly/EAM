<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<?php 
		$tireqty = (int)$_REQUEST['tireqty'];
		$oileqty = (int)$_REQUEST['oileqty'];
		$sparkqty = (int)$_REQUEST['sparkqty'];
		echo '<p>Order processed at ';
		echo date('H:i, jS F Y');
		echo "</p>";
		echo "<p>Your order is as follow: </p>";
		echo htmlspecialchars($tireqty) . ' tires<br>';
		echo htmlspecialchars($oileqty) . ' oile<br>';
		echo htmlspecialchars($sparkqty) . ' sparkqty<br>';

		$totalqty = 0;
		$totalqty = $tireqty + $oileqty + $sparkqty;
		echo "<p>Items order: " . $totalqty . "</p>";
		$totalamout = 0.00;

		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARCKPRICE', 4);

		$totalamout = $tireqty*TIREPRICE + $oileqty*OILPRICE + $sparkqty*SPARCKPRICE;
		echo "<p> Subtotal: $ " . number_format($totalamout, 2) ."</p>";

		$taxrate = 0.10;
		$totalamout = $totalamout * (1+$taxrate);
		echo "<p> Total including tax: $ " . number_format($totalamout, 2) ."</p>";

		$address = $_REQUEST['address'];
		echo "<p>Address is : " . $address . "</p>";

		$outputstring = $address.' '.$oileqty;
		fopen()



	?>
</body>
</html>