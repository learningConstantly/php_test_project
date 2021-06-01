<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

	<?php include("includes/design-top.php"); ?>
	<?php include("includes/navigation.php"); ?>

	<div class="container" id="main-content">
		<h2>DB pull</h2>

		<?php include("includes/../Model/db_pull.php");
		$conn = new mysqli("localhost", "root", "password", "nicDB");
		$db_pull = new db_pull($conn);
		$db_pull->pullDB();
		mysqli_close($conn)
		?>

	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>