<?php

get_header();

get_template_part('content', 'banner-blog');
get_template_part('content', 'blog-theme');
if(have_posts()) : ?>

	<div class="search-query">
	<h2>Search results: <?php the_search_query(); ?></h2>
	</div>
	
	<?php
	while(have_posts()) : the_post();
	
	get_template_part('content');
	
	
	endwhile;

	else :
		echo '<p>Post yet to be published</p>';
	endif; ?>
	
		</article><!-- /article.article-content end tag -->
	</div><!-- /.col-content end div -->
</div><!-- /container div.blog_content wrap-->
</div><!-- template part end div -->

<?php
get_footer();

?>