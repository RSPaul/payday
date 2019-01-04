<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fonts/stylesheet.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-awesome.min.css' ?>">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<?php $upload_dir = wp_upload_dir(); ?>
	<header class="main_header" style="background: url('<?php echo $upload_dir['baseurl'] . '/2019/01/payday_home_bg.png'; ?>'); background-repeat: no-repeat;">
		<div class="container-fluid">
			<div class="pull-left left_logo">
				<a href="/">
					<img src="<?php echo $upload_dir['baseurl'] . '/2019/01/payday_logo.png'; ?>" />
				</a>
			</div>
			<div class="pull-right right_menu_part">
				<div class="phone_contact"><i class="fa fa-phone" aria-hidden="true"></i> 646.770.1005</div>
				<nav class="navbar">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div>
			        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_class'     => 'main-menu',
									'items_wrap'     => '<ul class="nav navbar-nav">%3$s</ul>',
								)
							);
						?>
			          </ul>
			        </div><!--/.nav-collapse -->
			    </nav>
			</div>
		</div>

		<div class="banner_pay_less text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="pay_less_content">
							<h1>Pay less for payroll</h1>
							<p>9 out of 10 customers who swiched to <i style="font-weight: 500;">Payday</i> <span>say thy have saved over $450 a year on payroll.</span></p>
							<a href="javascript:void(0);" class="btn btn-primary pricing-btn">SEE OUR PRICING</a>
						</div>

						<div class="home_bannner_white_area">
							<?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>
							<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
								<?php
						            if ( has_post_thumbnail() ) :
						                the_post_thumbnail();
						            endif;
						         ?>
							<?php endwhile; ?> 
							<?php wp_reset_postdata(); ?>
							<!--content will show here later on-->	
						</div>

					</div>
				</div>
			</div>
		</div>

		


	</header>


		

	<div id="content" class="site-content">
