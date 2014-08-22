			</div>
	</div>
	<footer class="row footer text-padding">

		<div class="third">
			<h2 class="h4">Opening Times:</h2>
			<div class="footer-info">
				<?php echo fuel_var('opening-hours'); ?>
			</div>
		</div>

		<div class="third centre-align">
			<h2 class="h4">Address:</h2>
			<div class="footer-info">
				<span class="clear"><?php echo fuel_var('address_line_1'); ?></span>
				<span class="clear"><?php echo fuel_var('address_line_2'); ?></span>
				<span class="clear"><?php echo fuel_var('postcode'); ?></span>
			</div>
		</div>

		<div class="third right-align">
			<h2 class="h4">Contact Us:</h2>
			<div class="footer-info">
				<span class="clear"><?php echo fuel_var('phone'); ?></span>
				<span class="clear"><?php echo fuel_var('email'); ?></span>
			</div>
		</div>

		<p class="colophon"> &copy; <?php echo date("Y"); ?> Moorgate Motor Company, All Rights Reserved.</p>
	</footer>

<?php echo js('main').js($js); ?>

</body>
</html>