<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="/wp-content/themes/madonna/images/favicon.png">
	</head>
	<body>
	<?php // var_dump($_GET) ?>
		<div id="content_wrapper">
			<div class="header_wrapper">
				<a href="<?php echo home_url(); ?> " class="logo_link"></a>
				<div id="header">

					<div class="header_soc_wrap">
						<div class="header_search_wrap">
							<?php get_search_form(); ?>
						</div>
						<div class="soc_bot_wrapp">
							<a href="#">
								<img src="/wp-content/themes/madonna/images/soc_twitter.png" />
							</a>
							<a target="_blank" href="https://www.facebook.com/pages/%D0%A1%D0%B0%D0%BB%D0%BE%D0%BD-%D1%81%D0%B2%D0%B0%D0%B4%D0%B5%D0%B1%D0%BD%D0%BE%D0%B9-%D0%B8-%D0%B2%D0%B5%D1%87%D0%B5%D1%80%D0%BD%D0%B5%D0%B9-%D0%BC%D0%BE%D0%B4%D1%8B-%D0%9C%D0%B0%D0%B4%D0%BE%D0%BD%D0%BD%D0%B0/362181607142253">
								<img src="/wp-content/themes/madonna/images/soc_facebook.png" />
							</a>
							<a target="_blank" href="https://vk.com/club6178761">	
								<img src="/wp-content/themes/madonna/images/soc_vk.png" />
							</a>
							<a href="#">	
								<img src="/wp-content/themes/madonna/images/soc_ox.png" />
							</a>
							<a href="#">	
								<img src="/wp-content/themes/madonna/images/soc_photo.png" />
							</a>	
						</div>
					</div>
					<div class="header_address">
						Киев, ул. Саксаганского 67 <br>
						Белая Церковь, ул. Гагарина 11 <br>
						(044) 287-08-38; (098) 409-31-31 <br>
					</div>
				</div>
				<div id="access" role="navigation">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
					<?php// wp_nav_menu( array('theme_location'=>'main', 'container_id' => 'access', 'fallback_cb' => '' ) ); ?>
				</div>
			</div>	