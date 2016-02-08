<!-- site-content blog+ pages -->
<!-- diff header.php containing .container + all but article for blog+-->
<div class="container blog-content-wrap">
<div class="row">
	<div class="col-sm-4 col-aside">
	<!-- widget sidebar blog content -->
		<aside id="sidebar-post" class="sidebar-post">
			<?php get_search_form(); ?> 
			<hr>
			<div class="widgets-aside">
				<?php dynamic_sidebar('sidebar2'); ?>
			</div>
		</aside>
	<!-- end of widget sidebar blog content -->

	</div><!-- /.col-aside end div -->
		
		<div class="col-sm-8 content-blog-wrap">
		<article id="article-content">
