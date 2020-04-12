<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // get custom meta-value
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // get custom meta-value
	$search_enabled = get_theme_mod( 'search_enabled', '1' ); // get custom meta-value
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'my-theme' ); ?></a>

<div class="as-mainwrapper">
	<div class="bg-white">
	<header>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
						<?php include('inc/theme-options/header-top-left.php'); ?>
					</div>
					<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
						<div class="header-top-right">
						<?php include('inc/theme-options/header-top-right.php'); ?>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
		</div>

		<div class="header-logo-menu sticker">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="logo">
						<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if( get_field('site_logo','option') ): ?>
						<img src="<?php the_field('site_logo','option'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php endif; ?>
				</a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="mainmenu-area pull-right">
							<div class="mainmenu hidden-sm hidden-xs">
					<nav>
						<?php
								/** Loading WordPress Custom Menu (theme_location) **/
								wp_nav_menu( array(
									'theme_location'  => 'main-menu',
									'container'       => '',
									'menu_id'      	  => 'nav',
									'menu_class'	  =>'',
									'walker'          => new WP_Bootstrap_Navwalker(),
								) );
							?>
					</nav>
							</div>
							
							<ul class="header-search">
								<li class="search-menu">
								<i id="toggle-search" class="zmdi zmdi-search-for"></i>
								</li>
							</ul>
						<!--Search Form-->		
							<div class="search">
								<div class="search-form">
									<form method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input type="search" placeholder="Search here..." name="search" />
										<button type="submit">
										<span><i class="fa fa-search"></i></span>
										</button>
									</form>
								</div>
							</div>
							<!--Search Form-->
						</div> 
					</div>
				</div>
			</div>
		</div>  	
	</header>
	<?php
		get_template_part('template-parts/slider');
	?>
	<main id="main" class="container"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page)
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
