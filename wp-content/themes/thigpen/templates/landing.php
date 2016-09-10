<?php /* Template Name: Landing */ ?>

<div class="tile-row row">
	<div class="home-slider">
		<?php 
			$photo_block = get_field('home_gallery');
			foreach ($photo_block as $photo) {
				$image = $photo['url'];
		?>
			<div style="background-image: url(<?php echo($image); ?>)"></div>
		<?php } ?>
	</div>
</div>