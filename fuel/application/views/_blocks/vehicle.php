
<?php $vehicle = $this->load->model('vehicle_model'); ?>
<?php $vehicles  = $vehicle->getAll(); ?>

<div class="vehicles">
	<?php foreach ($vehicles as $vehicle) { ?>
	<div class="vehicle">

			<div class="header"><h2><?= $vehicle->make . ' ' . $vehicle->model ?></h2></div>
			<a href="/stock/view/<?= $vehicle->id ?>">
				<div class="body">
					<img src="/assets/images/<?= $vehicle->vehicle_1_img ?>" class="vehicle-img" />
					<div class="vehicle-details">
						<div class="item"><span class="label">REGISTRATION:</span><?= $vehicle->registration ?></div>
						<div class="item"><span class="label">MILEAGE:</span><?= $vehicle->mileage ?></div>
						<div class="item"><span class="label">FUEL:</span><?= $vehicle->fuel_type ?></div>
						<div class="item"><span class="label">SPECIFICATION:</span><?= $vehicle->spec ?></div>
						<div class="price">£<?= $vehicle->price ?></div>	
						<div class="contact"><?= fuel_var('phone') ?></div>				
					</div>
				</div>
			</a>

		</div>
	<?php } ?>
</div>