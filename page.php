<?php

get_header();

get_template_part('content', 'banner-page');
get_template_part('content', 'container');
if(have_posts()) : 
	while(have_posts()) : the_post(); ?>

	
	<!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
	<!-- #site-content below -->

	<article id="site-content" class="article-site-main-content">
	<?php the_content(); ?>


<!-- /#site-content -->
	

	<?php endwhile;

	else :
		echo '<p>No post found</p>';
	endif; ?>
	</article>
	</div><!-- template part end div -->
	<?php 
get_sidebar();
get_footer();

?>