<?php

get_header();

get_template_part('content', 'banner-blog');
get_template_part('content', 'blog-theme');
if(have_posts()) : 
	while(have_posts()) : the_post();

	get_template_part('content');
	
	
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
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