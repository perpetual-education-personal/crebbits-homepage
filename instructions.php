<?php
	$json = file_get_contents("instructions.json");
	$pageData = json_decode($json, true);

	// var_dump($pageData);

?>

<?php include('header.php'); ?>


<section class='section-name' id='and-its-id'>
<inner-column>


	<h1 class='loud-voice'>Instructions</h1>

	<ol>
			<?php	
				foreach($pageData as $section) { 
					if (isset($section['heading'])) {
						$heading = $section['heading'];
					}

					if (isset($section['content'])) {
						$content = $section['content'];
					}
					
					if (isset($section['supportingImage'])) {
						$image = $section['supportingImage'];
					}
					
					if (isset($section['bonus']))	{
						$bonus = $section['bonus'];
					} ?>
				<li>
					<section>
						<h2 class='attention-voice'><?=$heading?></h2>

						<?php foreach ($content as $paragraph) { ?>
							<p><?=$paragraph?></p>
						<?php	} ?>

						<picture>
							<img src="https://www.peprojects.dev/images/square.jpg" alt="">
						</picture>

						<div class="bonus">
							<p><?=$bonus?></p>
						</div>
					</section>
				</li>
			<?php } ?>		
	</ol>


</inner-column>
</section>


<?php include('footer.php'); ?>