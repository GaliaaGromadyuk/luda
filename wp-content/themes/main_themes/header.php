<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo wp_get_document_title(); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.png"/>
		<link href="https://fonts.googleapis.com/css?family=Cormorant:300,400,500" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container-fluid home">
			<div class="row home_container">
				<div class="col-md-auto header align-self-lg-center align-self-xl-center align-self-md-center align-self-top">
					<header class="align-self-lg-center align-self-xl-center align-self-md-center align-self-top">
						<div class="logo d-xl-none d-lg-none d-md-none d-block ">
							<?php the_custom_logo(); ?>
						</div>
						<div class="nav-icon_block">
							<button class="nav-icon d-xl-none d-lg-none d-md-none d-block">
								<i class="icon-menu"></i>
								<span>MENU</span>
							</button>
						</div>
							<?php

						 $args = array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => 'nav flex-xl-column flex-lg-column flex-md-column flex-row fade',
							'container_id'    => '',
							'menu_class'      => 'nav flex-xl-column flex-lg-column flex-md-column flex-row fade',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						 );

						 wp_nav_menu( $args ); ?>
						<div class=" fade d-lg-none d-md-none d-xl-none d-block home_contact">
							<p>( Viber/ WhatsApp / Telegram ):</p>
							<p>+38 (050) 135-45-33</p>
						</div>
						<div class="social fade ">
		  					<a href="https://www.instagram.com/hellolucy11/" target="_blank"><div class="social-item"><i class="icon-instagram"></i></div></a>
					    	<a href="https://www.facebook.com/hellolucy111" target="_blank"><div class="social-item"><i class="icon-facebook"></i></div></a>
						</div>
					</header>
				</div>
