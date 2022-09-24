<?php
	$json = file_get_contents("instructions.json");
	$pageData = json_decode($json, true);

	// var_dump($pageData);

?>

<?php include('header.php'); ?>


<section class='section-name' id='and-its-id'>
<inner-column>


	<h1 class='loud-voice'>Instructions</h1>

	<ol class='instructions'>
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
				} 

				if (isset($section['specials'])) {
					$specials = $section['specials'];
				}
		?>
			<li>
				<section>
					<h2 class='attention-voice'><?=$heading?></h2>

					<?php foreach ($content as $paragraph) { ?>
							<p><?=$paragraph?></p>
					<?php	} ?>

					<?php if (isset($specials)) { ?>
						<?php foreach ($specials as $special) { ?>
							<h3 class="special-title"><?=$special['title']?></h3>

							<p class='special-info'><?=$special['info'] ?></p>
						<?php } ?>
					<?php } ?>

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
								<h4>Tip!</h4>
								
								<p><em><?=$tip?></em></p>
							</div>
						<?php } ?>
					<?php	} ?>
				</section>
			</li>
		<?php } ?>		
	</ol>


</inner-column>
</section>


<section class='buy'>
<inner-column>

<?php include ('modules/buy-it/buy-it.php'); ?>

</inner-column>
</section>

<?php include('footer.php'); ?>