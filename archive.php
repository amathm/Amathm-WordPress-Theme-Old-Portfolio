<?php

get_header();

get_template_part('content', 'banner-blog');
get_template_part('content', 'blog-theme');
if(have_posts()) : 

	?>
	
	<h2 class="archive"><?php
	
		if(is_category() ){
			single_cat_title('Category Archive: ');
		} elseif(is_tag() ){
			single_tag_title();
		} elseif(is_author() ){
			the_post();
			echo 'Author Archive: ' . get_the_author();
			rewind_posts();
		} elseif(is_day() ) {
			echo 'Day of ' . get_the_date() . ' :Archive';
		} elseif(is_month() ){
			echo 'Month of ' . get_the_date('F') . ' :Archive';
		} elseif(is_year() ){
			echo 'Year of ' . get_the_date('Y') . ' :Archive';
		} else {
			'Archive';
		}
	
	?></h2>
	
	<?php 
	while(have_posts()) : the_post();

	get_template_part('content', get_post_format() );
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