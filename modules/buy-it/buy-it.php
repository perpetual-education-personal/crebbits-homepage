	<buy-it>

		<?php	

		$json = file_get_contents("store.json");
		$storeData = json_decode($json, true);

		//var_dump($storeData);

		foreach($storeData as $section) { 
			if (isset($section['image'])) {
				$image = $section['image'];
			} 
			if (isset($section['content'])) {
				$content = $section['content'];
			} 
			if (isset($section['button'])) {
				$button = $section['button'];
			} ?>

		<cred-talking>
			<picture class="cred">
				<img src="<?=$image?>" alt="">
			</picture>
			<p><?=$content?></p>
		</cred-talking>
		<a class="buy-button action-voice" href="#"><?=$button?></a>

		<?php } ?>

	</buy-it>