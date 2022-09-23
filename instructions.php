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
					$images = $section['supportingImage'];
				}
				
				if (isset($section['tips']))	{
					$tips = $section['tips'];
				} ?>
			<li>
				<section>
					<h2 class='attention-voice'><?=$heading?></h2>

					<?php foreach ($content as $paragraph) { ?>
						<p><?=$paragraph?></p>
					<?php	} ?>

					<?php if (isset($images)) { ?>
						<?php foreach ($images as $image) { ?>
							<picture class='supporting-image'>
								<img src="<?=$image?>" alt="">
							</picture>
						<?php } ?>
					<?php } ?>

					<?php	if (isset($tips)) { ?>
						<?php foreach ($tips as $tip) { ?>
							<div class="tip">
								<p><?=$tip?></p>
							</div>
						<?php } ?>
					<?php	} ?>
				</section>
			</li>
		<?php } ?>		
	</ol>


</inner-column>
</section>


<?php include('footer.php'); ?>