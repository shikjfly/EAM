<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>order</title>
</head>
<body>
	<form action="processorder.php" method="get">
		<table>
			<tr>
				<td>Item</td>
				<td>Quantity</td>
			</tr>
			<tr>
				<td>Tires</td>
				<td><input type="text" name="tireqty" size="3" maxlength="3"></td>
			</tr>
			<tr>
				<td>Oil</td>
				<td><input type="text" name="oileqty" size="3" maxlength="3"></td>
			</tr>
			<tr>
				<td>Spark Plugs</td>
				<td><input type="text" name="sparkqty" size="3" maxlength="3"></td>
			</tr>
			<tr>
				<td>Shipping Address</td>
				<td><input type="text" name="address">
				</td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" value="Submit Order"></td>
			</tr>
		</table>
	</form>
</body>
</html>