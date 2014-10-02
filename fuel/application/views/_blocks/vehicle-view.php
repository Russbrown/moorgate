
<div class="vehicle vehicle-view">		
		<div class="header"><h2><?= $vehicle[0]->make . ' ' . $vehicle[0]->model ?></h2></div>
		<div class="body">
			<div class="vehicle-images">

				<img src="/assets/images/<?= $vehicle[0]->vehicle_1_img ?>" class="vehicle-img active" />

				<?php if (isset($vehicle[0]->vehicle_2_img)) { ?>
					<img src="/assets/images/<?= $vehicle[0]->vehicle_2_img ?>" class="vehicle-img" />
				<?php	} ?>

			</div>
			<div class="vehicle-details">
				<div class="item"><span class="label">REGISTRATION:</span><?= $vehicle[0]->registration ?></div>
				<div class="item"><span class="label">MILEAGE:</span><?= $vehicle[0]->mileage ?></div>
				<div class="item"><span class="label">FUEL:</span><?= $vehicle[0]->fuel_type ?></div>
				<div class="item"><span class="label">SPECIFICATION:</span><?= $vehicle[0]->spec ?></div>
				<div class="price">£<?= $vehicle[0]->price ?></div>	
				<div class="contact"><?= fuel_var('phone') ?></div>				
			</div>
		</div>
</div>

