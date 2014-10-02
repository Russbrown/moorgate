
<div class="vehicle vehicle-view">		
		<div class="header"><h2><?= $vehicle[0]->make . ' ' . $vehicle[0]->model ?></h2></div>
			<div class="body">
				<div class="vehicle-images gallery interaction-gallery">

					<div class="gallery__nav nav__left"><</div>
					<div class="gallery__nav nav__right">></div>

					<img src="/assets/images/<?= $vehicle[0]->vehicle_1_img ?>" class="vehicle-img active" />

					<?php if (isset($vehicle[0]->vehicle_2_img)) { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_2_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_3_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_3_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_4_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_4_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_5_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_5_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_6_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_6_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_7_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_7_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_8_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_8_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_9_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_9_img ?>" class="vehicle-img" />
					<?php	} ?>

					<?php if (isset($vehicle[0]->vehicle_10_img) && $vehicle[0]->vehicle_3_img != '') { ?>
						<img src="/assets/images/<?= $vehicle[0]->vehicle_10_img ?>" class="vehicle-img" />
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

