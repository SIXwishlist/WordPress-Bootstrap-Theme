<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo ( 'stylesheet_url' );?>">
	<title><?php wp_title ( '|', true, 'right' ); ?></title>
	<?php echo stripslashes ( get_option ( 'analytics' ) ); ?>
</head>
<body>
	<a id="gotop" href="#" title="<?php _e ( 'Back to top', 'Bootstrap' ); ?>"></a>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-home"></span> <?php echo stripslashes( get_option ( 'brand' ) ); ?></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<?php if( function_exists( 'wp_nav_menu' ) ) wp_nav_menu( array (
							'container' => false,
							'theme_location' => 'primary',
							'items_wrap' => '%3$s',
							'walker' => new Walker_Nav_Bootstrap (),
					)); ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1><?php bloginfo ( 'name' ); ?></h1>
			<p>
				<?php bloginfo ( 'description', 'display' ); ?>
			</p>
		</div>
	</div>
	<div class="container">