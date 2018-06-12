<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mila_Atlantis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	

	<?php
	$temp_parts = get_template_directory_uri() . "/template-parts/" ?>


	<link rel="stylesheet" href="<?php echo $temp_parts . 'css/reset.css' ?>">
  <link rel="stylesheet" href="<?php echo $temp_parts . 'css/normalize.css' ?>">

	<link rel="stylesheet" href="<?php echo $temp_parts . 'css/main.css' ?>">
	

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<?php 
	wp_head(); ?>



</head>

<body>
