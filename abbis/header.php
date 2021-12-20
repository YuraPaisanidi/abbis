<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="АБИСС">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
</head>

<?php wp_head(); ?>

<body>

	<?php get_template_part( 'parts/header' ); ?>