<!DOCTYPE html>
<html>

<head>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open();	?>

	<?php get_template_part('templates/header/header', 'navbar'); ?>

	<main>