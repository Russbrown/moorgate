
<?php $gallery = $this->load->model('gallery_model'); ?>
<?php $images  = $gallery->getImages(); ?>

<div class="gallery interaction-gallery">

<!-- 	<div class="gallery__nav nav__left"></div> -->
	<div class="gallery__nav nav__right">></div>

	<div class="gallery-wrapper">
		<?php 
		$count = 1;
		foreach ($images as $image) {
			if ($count == 1) {
				echo('<img src="/assets/images/' . $image->img . '" class="active"/>');
			} else {
				echo('<img src="/assets/images/' . $image->img . '"/>');
			}
			$count++;
		} 
		?>
	</div>

</div>