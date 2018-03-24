<?php
/**
 * The header for Ambuz
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package Ambuz
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Sinash Shajahan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="content" class="site-content">