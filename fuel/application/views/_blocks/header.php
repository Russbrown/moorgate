<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
 	<title>
		<?php 
			if (!empty($is_blog)) :
				echo $CI->fuel_blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?>
	</title>

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">

	<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<?php
		echo css('main.min');
		echo js('jquery');

		if (!empty($is_blog)):
			echo $CI->fuel_blog->header();
		endif;
	?>

</head>
<body>
	<div class="page">
		<div class="wrapper">
			<header class="page-header">
				<div class="logo"></div>
				<div class="header__contact">
					<h2><?php // echo fuel_var('address'); ?> 10 king road, Sheffield S11 9XX</h2>
					<h2><?php // echo fuel_var('phone'); ?>  0114 232 232</h2>
				</div>
				<?php echo fuel_nav(array('container_tag_id' => 'topmenu', 'item_id_prefix' => 'topmenu_')); ?>
			</header>		