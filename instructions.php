
<?php
	$json = file_get_contents("instructions.json");
	$pageData = json_decode($json, true);

	// var_dump($pageData);

?>

<?php include('header.php'); ?>


<?php include('how-to-play.php'); ?>



<?php include ('modules/buy-it/buy-it.php'); ?>

<?php include('footer.php'); ?>