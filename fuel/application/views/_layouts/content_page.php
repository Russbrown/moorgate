	<?php $this->load->view('_blocks/header')?>
	
	<div class="interaction-gallery">
		<img src="/assets/images/<?= fuel_var('page_img'); ?>" class="active"/>
	</div>
	
	<section id="main_inner">
		<div class="main-column">
			<div class="fifty text-padding has-image-right">
				<h2><?php echo fuel_var('heading_left_column'); ?></h2>
				<?php echo fuel_var('body_left_column'); ?>
			</div>	
			<div class="fifty text-padding has-image-right">
				<h2><?php echo fuel_var('heading_right_column'); ?></h2>
				<?php echo fuel_var('body_right_column'); ?>
			</div>
		</div>
	</section>

	<?php $this->load->view('_blocks/contact-form') ?>
		
	<?php $this->load->view('_blocks/footer')?>
