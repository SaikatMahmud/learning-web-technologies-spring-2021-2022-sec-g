<html>

<head>
	<title>Userlist</title>
</head>

<body>


	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<a href="adminHome.php"> Back</a>

	<br><br>
	<form>
		<fieldset>
			<legend>Buyer List </legend>
			<table border="1">
				<tr>
					<th>Buyer ID</th>
					<th>User ID</th>
					<th>Buyer Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>ACTION</th>
				</tr>
				<tr>
					<?php
					require('header.php');
					$deleteErrorB = "";
					if (isset($_GET['msgB'])) {
						$deleteErrorB = "Buyer delete operation failed !";
					}
					require_once('../models/buyer_sellerModel.php');
					//require('../models/sellerModel.php');
					//require('header.php');
					$buyers = getAllBuyer();
					?>
				<tr>
					<?php
					if ($buyers != null) {
						while ($row = mysqli_fetch_assoc($buyers)) {
							foreach ($row as $i => $val) {
								//print_r($row);
								//echo $row['id'];
					?>
								<td><?= $val ?></td>
							<?php } ?>
							<td>
								<a href="deleteBuyer.php?id=<?= $row['buyerID'] ?>"> DELETE </a>
							</td>
				</tr>
		<?php }
					} else
						echo "No buyer found";
		?>
			</table>
			<?= $deleteErrorB ?>
		</fieldset>

	</form>

</body>

</html>

<html>

<body>


	<form>
		<fieldset>
			<legend>Seller List </legend>
			<table border="1">
				<tr>
					<th>Seller ID</th>
					<th>User ID</th>
					<th>Buyer Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Ratings</th>
					<th>ACTION</th>
				</tr>
				<tr>
					<?php
					$deleteErrorS = "";
					if (isset($_GET['msgS'])) {
						$deleteErrorS = "Seller delete operation failed !";
					}
					require_once('../models/buyer_sellerModel.php');
					//require_once('../models/sellerModel.php');
					//require('header.php');
					$sellers = getAllSeller();
					?>
				<tr>
					<?php
					if ($sellers != null) {
						while ($row = mysqli_fetch_assoc($sellers)) {
							foreach ($row as $i => $val) {
								//print_r($row);
								//echo $row['id'];
					?>
								<td><?= $val ?></td>
							<?php } ?>
							<td>
								<a href="deleteSeller.php?id=<?= $row['sellerID'] ?>"> DELETE </a>
							</td>
				</tr>
		<?php }
					} else
						echo "No seller found"; ?>

			</table>
			<?= $deleteErrorS ?>
		</fieldset>
	</form>


</body>

</html>