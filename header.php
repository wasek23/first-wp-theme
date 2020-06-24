<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<!--Create By Wasek Bellah-->
		<meta <?php bloginfo('charset');?>/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php if (is_single() || is_page()) { wp_title('',true); } elseif(is_front_page()) { bloginfo('description'); } else { bloginfo('description'); } ?> | <?php bloginfo('name');?></title>
		
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/w-fevicon.png" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/w-fevicon.ico" />
		
		<?php wp_head();?>
	</head>
	
	<body <?php body_class(); ?>>
		
		<!--Start Header-->
		<div class="full_screen header_bg">
			<div class="screen">
				<header>
					<div id="header">
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
						<p><?php bloginfo('description'); ?></p>
					</div>
				</header>
			</div>
		</div>
		<!--Finish Header-->
		
		<!--Start Menu-->
		<div id="sticker" class="full_screen nav_bg">
			<div class="screen">
				<nav>
					<div id="menu">
						<?php
							
							$menu_arg = array(
								'theme_location' => 'primary'
							);
							
							wp_nav_menu( $menu_arg );
						?>
					</div>
				</nav>	
			</div>
		</div>
		<!--Finish Menu-->