<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
  
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div>
<div>
<div id="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		<!-- My Contact Modal Trigger goes here -->
			<a class="navbar-brand" href="#" data-toggle="modal" data-target="#myContactModal" title="Messenger"><?php bloginfo('name')?></a>		
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle Navigation Menu</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div>
		<div class="navbar-collapse collapse">
			<?php /* Primary navigation */
			wp_nav_menu( array(
			  'menu' => 'top_menu',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav navbar-right',
			  //Process nav menu using our custom nav walker
			  'walker' => new wp_bootstrap_navwalker())
			);
			?>
		</div>
		</div>
	</div>
</nav>

<!-- My Contact Modal Form -->
<div class="container">
<div id="myContactModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal Content -->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Get In Touch</h4><hr>
				<div class="modal-body">
					<div class="form-group-modal">
					<?php echo do_shortcode('[contact-form-7 id="233" title="Contact Page Form"]'); ?>
					</div>
				</div>
				<div class="modal-footer">
				<p style="float:left; max-width:300px;" class="alert-success">Feel free to ask me any question, 
				work related or otherwise and I'll get 
				back to you as soon as possible</p>
					<button type="button" class="btn btn-default" data-dismiss="modal">&times;</button>
					<a class="btn btn-success btn-xs" href="<?php echo esc_url(home_url('/')); ?>">Home Page</a>
					<a href="<?php echo get_page_link(get_page_by_title(blog)); ?>" class="btn btn-warning btn-xs">Blog Page</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- /#myContactModal form -->




<!-- /header.php end of content -->



<!-- #site-content below -->
<!-- site-content static+ pages -->
<!-- diff header.php containing .container + all but article for static+-->






