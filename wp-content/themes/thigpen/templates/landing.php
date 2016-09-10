<?php /* Template Name: Landing */ ?>
<?php
	$photo_block_1 = get_field('home_gallery_1');
	$photo_array_1 = [];
	foreach ($photo_block_1 as $photo) {
		array_push($photo_array_1, $photo['url']);
	}
	$url_string_1 = implode(',', $photo_array_1);

	$photo_block_2 = get_field('home_gallery_2');
	$photo_array_2 = [];
	foreach ($photo_block_2 as $photo) {
		array_push($photo_array_2, $photo['url']);
	}
	$url_string_2 = implode(',', $photo_array_2);

	$photo_block_3 = get_field('home_gallery_3');
	$photo_array_3 = [];
	foreach ($photo_block_3 as $photo) {
		array_push($photo_array_3, $photo['url']);
	}
	$url_string_3 = implode(',', $photo_array_3);

	$photo_block_4 = get_field('home_gallery_4');
	$photo_array_4 = [];
	foreach ($photo_block_4 as $photo) {
		array_push($photo_array_4, $photo['url']);
	}
	$url_string_4 = implode(',', $photo_array_4);
?>

<div class="tile-row row">
	<div class="tile-wrapper col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 no-pad">
		<div class="tile one col-xs-12 col-sm-6 no-pad" data-url="<?php echo($url_string_1); ?>"></div>
		<div class="tile two hidden-xs col-sm-6 no-pad hidden-xs" data-url="<?php echo($url_string_2); ?>"></div>
		<div class="clearfix"></div>
		<div class="tile three hidden-xs col-sm-6 no-pad hidden-xs" data-url="<?php echo($url_string_3); ?>"></div>
		<div class="tile four hidden-xs col-sm-6 no-pad hidden-xs" data-url="<?php echo($url_string_4); ?>"></div>
	</div>
</div>