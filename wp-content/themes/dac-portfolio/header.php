<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name')?> - <?php bloginfo('description')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<script>document.body.className += ' fade-out';</script>

<div class="wrapper">

	<header class="main-header">
		<a href="<?php bloginfo('url'); ?>" class="brand-container">
			<svg width="30px" height="30px" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink">
			    <rect fill="#324654" x="0" y="0" width="30" height="30"></rect>
			    <text font-family="Raleway-Bold, Raleway" font-size="12" font-weight="bold" line-spacing="12" letter-spacing="-0.400000006" fill="#FFFFFF">
			        <tspan x="5" y="14">D </tspan>
			        <tspan x="15.672" y="14">C</tspan>
			    </text>
			    <text font-family="Raleway-Regular, Raleway" font-size="12" font-weight="normal" letter-spacing="-0.899999976" fill="#9B9B9B">
			        <tspan x="4.00799998" y="26">W </tspan>
			        <tspan x="17.412" y="26">D</tspan>
			    </text>
			</svg>
			<h1 class="site-title"><?php bloginfo('name'); ?>
				<span class="secondary-text"><?php bloginfo('description'); ?></span>
			</h1>
		</a>

	</header> <!-- /header -->