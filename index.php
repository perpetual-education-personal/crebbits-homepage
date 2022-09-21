<?php include('header.php'); ?>

<?php 

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}	else {
		$page = 'home';
	}

?>


<section class='section-name' id='and-its-id'>
<inner-column>


<?php include($page . ".php"); ?>


</inner-column>
</section>


<?php include('footer.php'); ?>