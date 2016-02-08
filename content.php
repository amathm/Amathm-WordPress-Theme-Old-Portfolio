	<!-- post sections -->

	<section class="post <?php if( has_post_thumbnail() && !is_page() ) { ?>has-thumbnail<?php } ?>">
		<div class="<?php if(is_home() ) { ?>post-home<?php } ?>">
		<div class="post-thumbnail">
			<!-- added theme support for post thumbnails -->
		<?php if(is_single() ){
			the_post_thumbnail('large-thumbnail');
		} else { ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		<?php } ?>
		</div>
		<?php if (!is_single() ) { ?>
			<h2 class="post-header-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2><?php
		} else { ?>
			<h2 class="single-header-title"> <?php echo get_the_title(); ?> </h2>
		<?php } ?>
		
		<!-- post author, date, category meta info -->
		<p class="post-info"><?php the_time('F j, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | posted in 
		
		<?php
		
		$categories = get_the_category();
		$separator = ", ";
		$output = '';
		
		if($categories) {
			foreach($categories as $category) {
				$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
			}
			echo trim($output, $separator);
		}
		?>
		</p>
		
		<p>
		<?php if(is_single() ){
			the_content();
		} else {
			echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read More &raquo;</a>
		<?php } ?>

		</p>
		
		</div>
	</section><!-- /.post -->