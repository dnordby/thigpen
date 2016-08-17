<?php /* Template Name: Landing */ ?>
<?php
	// GET ARRAY OF IMAGES -> AFC?
	if ( have_rows('home_gallery_1') ) :
		$url_string_1 = [];
		while ( have_rows('home_gallery_1') ) : the_row();
			array_push( $url_string_1, get_sub_field('photo') );
		endwhile;
		$url_string_1 = implode(',', $url_string_1);
	endif;
	if ( have_rows('home_gallery_2') ) :
		$url_string_2 = [];
		while ( have_rows('home_gallery_2') ) : the_row();
			array_push( $url_string_2, get_sub_field('photo') );
		endwhile;
		$url_string_2 = implode(',', $url_string_2);
	endif;
	if ( have_rows('home_gallery_3') ) :
		$url_string_3 = [];
		while ( have_rows('home_gallery_3') ) : the_row();
			array_push( $url_string_3, get_sub_field('photo') );
		endwhile;
		$url_string_3 = implode(',', $url_string_3);
	endif;
	if ( have_rows('home_gallery_4') ) :
		$url_string_4 = [];
		while ( have_rows('home_gallery_4') ) : the_row();
			array_push( $url_string_4, get_sub_field('photo') );
		endwhile;
		$url_string_4 = implode(',', $url_string_4);
	endif;
?>

<div class="tile-row row">
	<div class="tile-wrapper col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 no-pad">
		<div class="tile one col-xs-12 col-sm-6 no-pad" data-url="<?php echo($url_string_1); ?>"></div>
		<div class="tile two hidden-xs col-sm-6 no-pad" data-url="<?php echo($url_string_2); ?>"></div>
		<div class="clearfix"></div>
		<div class="tile three hidden-xs col-sm-6 no-pad" data-url="<?php echo($url_string_3); ?>"></div>
		<div class="tile four hidden-xs col-sm-6 no-pad" data-url="<?php echo($url_string_4); ?>"></div>
	</div>
</div>