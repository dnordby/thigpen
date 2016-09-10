<?php /* Template Name: Photo Grid */ ?>

<section class="container-fluid photo-grid">
	<div class="row">
<?php
	$i = 0;
	if ( is_page('Landscapes') ) {
			$photo_array = get_field('landscape_gallery');
			$i = 0;
			foreach ($photo_array as $photo) {
				$url_string = $photo['url'];
				$i++;
?>
				<div class="photo-wrapper photo-wrapper-<?php echo($i); ?>">
					<div class="zoombox">
						<div class="photo" style="background-image: url(<?php echo($url_string); ?>);"></div>
						<div class="overlay"></div>
					</div>
				</div>
<?php
			}
	} elseif ( is_page('Portraits') ) {
		$photo_array = get_field('portraits_gallery');
		$i = 0;
		foreach ($photo_array as $photo) {
			$url_string = $photo['url'];
			$i++;
?>
				<div class="photo-wrapper photo-wrapper-<?php echo($i); ?>">
					<div class="zoombox">
						<div class="photo" style="background-image: url(<?php echo($url_string); ?>);"></div>
						<div class="overlay"></div>
					</div>
				</div>
<?php
		}
?>
					
<?php
	}
?>
	</div>
</section>