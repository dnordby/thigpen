<?php /* Template Name: Photo Grid */ ?>

<section class="container photo-grid">
	<div class="row">
<?php
	$i = 0;
	if ( is_page('Landscapes') ) {
		if ( have_rows('landscape_gallery') ) :
			$url_string = '';
			while ( have_rows('landscape_gallery') ) : the_row();
				$url_string = $url_string.get_sub_field('photo');
				$i++;
?>
					<div class="col-lg-3 photo-wrapper photo-wrapper-<?php echo($i); ?>">
						<div class="photo" style="background-image: url(<?php echo($url_string); ?>);"></div>
					</div>
<?php
			endwhile;
		endif;
	} elseif ( is_page('Portraits') ) {
		if ( have_rows('portraits_gallery') ) :
			$url_string = '';
			while ( have_rows('portraits_gallery') ) : the_row();
				$url_string = $url_string.get_sub_field('photo');
				$i++;
?>
					<div class="col-lg-3 photo-wrapper photo-wrapper-<?php echo($i); ?>">
						<div class="photo" style="background-image: url(<?php echo($url_string); ?>);"></div>
					</div>
<?php
			endwhile;
		endif;
	}
?>
	</div>
</section>