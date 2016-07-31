<?php /* Template Name: Landing */ ?>
<?php
	// GET ARRAY OF IMAGES -> AFC?
	if ( have_rows('home_gallery') ) :
		$url_string = '';
		while ( have_rows('home_gallery') ) : the_row();
			$url_string = $url_string.get_sub_field('photo').',';
		endwhile;
	endif;
?>

<div class="tile-row row">
	<div class="tile-wrapper col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 no-pad">
		<div class="tile one col-xs-12 col-sm-6 no-pad" data-url="<?php echo($url_string); ?>"></div>
		<div class="tile two col-xs-12 col-sm-6 no-pad" data-url="<?php echo($url_string); ?>"></div>
		<div class="clearfix"></div>
		<div class="tile three col-xs-12 col-sm-6 no-pad" data-url="<?php echo($url_string); ?>"></div>
		<div class="tile four col-xs-12 col-sm-6 no-pad" data-urls="<?php echo($url_string); ?>"></div>
	</div>
</div>