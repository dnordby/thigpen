<div id="landing-slider" class="swiper-container">
	<div class="swiper-wrapper">
	<?php
	while (have_posts()) : the_post();
		$post = get_the_id();
		$gallery = get_post_gallery($post, false);
		$gallery_attachment_ids = explode( ',', $gallery['ids'] );

		foreach ($gallery_attachment_ids as $id) {
			$image_file = wp_get_attachment_image_src($id, 'medium_large')[0];
			$image_alt = implode(" ", get_post_meta($id, '_wp_attachment_image_alt'));
			?>
				<img src="<? echo($image_file) ?>" class="swiper-slide <? echo($image_alt) ?>">
			<?
		}
	endwhile;
	?>
</div>
