<?php

get_header();

get_template_part('content', 'banner-blog');
get_template_part('content', 'blog-theme');

		?><!-- post sections -->

	<section class="post <?php if( has_post_thumbnail() && !is_page() ) { ?>has-thumbnail<?php } ?>">
		<div class="<?php if(is_home() ) { ?>post-home<?php } ?>">
		<div class="post-thumbnail">
		
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

					<div class="error"><?php get_search_form(); ?></div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->
		
		</div>
	</section><!-- /.post -->
	
		</article><!-- /article.article-content end tag -->
	</div><!-- /.col-content end div -->
</div><!-- /container div.blog_content wrap-->
</div><!-- template part end div -->

<?php

get_footer();

?>