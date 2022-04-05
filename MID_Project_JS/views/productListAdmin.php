<html>

<head>
	<title>Product List</title>
</head>

<body>


	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<a href="adminHome.php"> Back</a>

	<br><br>
	<table border="1">
		<tr>
			<th>Porduct ID</th>
			<th>Seller ID</th>
			<th>Name</th>
			<th>Catagory</th>
			<th>Description</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Ratings</th>

			<th>ACTION</th>
		</tr>
		<tr>
			<?php
			require('header.php');
			require('../models/productModel.php');
			$deleteError = "";
			$products = getAllProducts();
			if (isset($_GET['msg'])) {
				$deleteError = "Delete operation failed !";
			}
			?>
		<tr>
			<?php
			if ($products != null) {
				while ($row = mysqli_fetch_assoc($products)) {
					//print_r($row);
					foreach ($row as $i => $val) {

						//echo $row['id'];
			?>
						<td><?= $val ?></td>
					<?php } ?>
					<td>
						<a href="deleteProduct.php?id=<?= $row['productID'] ?>>"> DELETE </a>
						|
						<a href="editProductAdmin.php?id=<?= $row['productID'] ?>"> Edit Ratings </a>
					</td>
		</tr>
<?php }
			} else
				echo "No product found"; ?>
<?= $deleteError ?>

</tr>
	</table>
</body>

</html>