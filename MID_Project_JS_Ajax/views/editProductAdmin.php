<?php
require('header.php');

// $printUpdate="";
// $printUpdate=$_GET['msg'];


require('../models/productModel.php');
$id = $_GET['id'];
$product = getProductByID($id);
$product = mysqli_fetch_assoc($product);
//print_r($product);

if (isset($_REQUEST['submit'])) {
	$ratings = $_REQUEST['ratings'];

	if ($ratings != null) {
		$update = editRatings($id, $ratings);
		if ($update) {
			header("location: productListAdmin.php");
			// $printUpdate="Update successfull...";
			// header("location: edit.php?id=$id&msg=$printUpdate");

		} else {
			$printUpdate = "Operation Failed";
		}
	}
}
?>

<html>

<head>
	<title>Edit Ratings</title>
</head>

<body>

	<a href="home.php"> Back</a> |
	<a href="../controllers/logout.php"> logout</a>

	<form method="POST" action="#">
		<fieldset>
			<legend>EDIT PRODUCT RATINGS</legend>

			<table>
				<tr>
					<td>Product ID</td>
					<td>
						<input type="text" name="ProductID" value="<?= $product['productID'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Seller ID</td>
					<td>
						<input type="text" name="SellerID" value="<?= $product['sellerID'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>
						<input type="email" name="name" value="<?= $product['NAME'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td>
						<input type="text" name="catagory" value="<?= $product['CATAGORY'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<input type="text" name="description" value="<?= $product['DESCRIPTION'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Price</td>
					<td>
						<input type="number" name="price" value="<?= $product['PRICE'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td>
						<input type="number" name="quantity" value="<?= $product['QUANTITY'] ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Ratings</td>
					<td>
						<input type="text" name="ratings" value="<?= $product['RATINGS'] ?>">
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>