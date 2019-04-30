<!doctype html>
<html lang=<?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
<?php if ( is_front_page() ): ?>
	<header id="front-header">
		<div id="front-header-small">
			<nav>
				<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-space-cube.svg" alt="Logo"
				                 class="logo-img"></a>

				<button id="nav-pull-icon" class="btn-nav"><i class="fas fa-bars"></i></button>
			</nav>
		</div>
		<div id="front-header-nav-small">
			<?php 
				wp_nav_menu( [
					'theme_location'=>'nav_menu',
					'menu_class'=>'nav-ul',
					'container' => 'nav',
					'container_id' => 'navigation',
				] ); 
			?>
		</div>
		<div id="front-middle-header">
			<nav id="logo">
				<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-space-cube.svg" alt="Logo"
				                 class="logo-img"></a>
			</nav>				
			<?php 
				wp_nav_menu( [
					'theme_location'=>'nav_menu',
					'menu_class'=>'nav-ul',
					'container' => 'nav',
					'container_id' => 'navigation',
				] ); 
			?>
			<nav id="search-form">
				<form action="#">
					<div class="form-group">
						<input type="text" name="search-items" id="search-items" class="form-control"
						       placeholder="Search...">
						<label for="search-items"></label>
					</div>
				</form>
			</nav>
		</div>
		<div id="front-bottom-header">
			<div>
				<h1><?php echo get_bloginfo( 'name' ); ?></h1>
				<p><?php echo get_bloginfo( 'description' ); ?></p>
			</div>
		</div>
		<div id="arrow-down">
			<a href="#front-articles"><i class="fas fa-angle-down fa-5x"></i></a>
		</div>
		
	</header>
<? else: ?>
	<header id="blog-header">
		<div id="blog-header-small">
			<nav>
				<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-space-cube.svg" alt="Logo"
				                 class="logo-img"></a>

				<button id="nav-pull-icon" class="btn-nav"><i class="fas fa-bars"></i></button>
			</nav>
		</div>
		<div id="blog-header-nav-small">
			<?php 
				wp_nav_menu( [
					'theme_location'=>'nav_menu',
					'menu_class'=>'nav-ul',
					'container' => 'nav',
					'container_id' => 'navigation',
				] ); 
			?>
		</div>
		<div id="blog-middle-header">
			<nav id="logo">
				<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-space-cube.svg" alt="Logo"
				                 class="logo-img"></a>
			</nav>				
			<?php 
				wp_nav_menu( [
					'theme_location'=>'nav_menu',
					'menu_class'=>'nav-ul',
					'container' => 'nav',
					'container_id' => 'navigation',
				] ); 
			?>
			<nav id="search-form">
				<form action="#">
					<div class="form-group">
						<input type="text" name="search-items" id="search-items" class="form-control"
						       placeholder="Search...">
						<label for="search-items"></label>
					</div>
				</form>
			</nav>
		</div>
		<?php if ( is_single() ): ?>
			<div id="single-blog-bottom-header">
				<div>
					<h1><?php wp_title(''); ?></h1>
				</div>
			</div>
		<?php else: ?>
			<div id="blog-bottom-header">
				<div>
					<h1><?php wp_title(''); ?></h1>
					<p><?php echo "Description"; ?></p>
				</div>
			</div>
		<?php endif; ?>
	</header>
<?php endif; ?>
