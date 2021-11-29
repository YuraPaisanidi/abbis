<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title>Главная</title>
	<meta name="description" content="АБИСС">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg">
	<link rel="stylesheet" href="css/app.min.css?v=1">
	<script src="js/app.min.js" defer></script>

</head>

<?php wp_head(); ?>

<body>
	<?php get_template_part( 'parts/header' ); ?>