<!-- banner header.php -->
<div id="main-content" class="container-fluid">
	<div class="row">
		<div class="col-xs-12 igallery">
			<h5><span class="glyphicon glyphicon-menu-right"></span> Blog Categories </h5>
			<div class="align-center">
				

				<div id="page-wrap">
					
					<div class="info-col">
					
			    		<h2>Technology</h2>
			    		
			    		<a class="image technology" href="<?php echo home_url() ?>/category/technology">View Image</a>
			    		
			    		<dl>
			    		  <dt>Description</dt>
			    		  <dd class="cat-des"><?php echo category_description(get_category_by_slug('technology' )->term_id); ?></dd>
			    		  <dt>Tags</dt>
			    		  <dd>web, design, development, tutorial, html, css, bootstrap, jquery, wordpress, technology, rambling</dd>
			    		  <dt>Author</dt>
			    		  <dd>by <?php bloginfo('name'); ?></dd>
			    		</dl>
					
					</div>
					
			        <div class="info-col">
			        
			        	<h2>Life</h2>
			        	
			        	<a class="image life" href="<?php echo home_url() ?>/category/amath">View Image</a>
			        	
			        	<dl>
			        	  <dt>Description</dt>
			        	  <dd class="cat-des"><?php echo category_description(get_category_by_slug('amath' )->term_id); ?></dd>
			        	  <dt>Tags</dt>
			        	  <dd>life, movies, interest, career, rambling</dd>
			        	  <dt>Author</dt>
			        	  <dd>by <?php bloginfo('name'); ?></dd>
			        	</dl>
			        
			        </div>
					
					<div class="info-col">
					
			    		<h2>Arsenal FC <span class="badge" title="There are one or more post submited to date">1+</span></h2>
			    		
			            <a class="image arsenalfc" href="<?php echo home_url() ?>/category/arsenalfc">View Image</a>
			    		
			    		<dl>
			    		  <dt id="starter">Description</dt>
			    		  <dd class="cat-des"><?php echo category_description(get_category_by_slug('arsenalfc' )->term_id); ?></dd>
			    		  <dt>Tags</dt>
			    		  <dd>Arsenal, FC, Football, soccer, 15-16, season, rambling</dd>
			    		  <dt>Author</dt>
			    		  <dd>by <?php bloginfo('name'); ?></dd>
			    		</dl>
					
					</div>
					
					<div class="info-col">
					
			    		<h2>Anime <span class="badge" title="There are one or more post submited to date">1+</span></h2>
			    		
			            <a class="image animeblogs" href="<?php echo home_url() ?>/category/animeblogs">View Image</a>
			    		
			    		<dl>
			    		  <dt>Description</dt>
			    		  <dd class="cat-des"><?php echo category_description(get_category_by_slug('animeblogs' )->term_id); ?></dd>
			    		  <dt>Tags</dt>
			    		  <dd>Anime, action, adventure, shounen, rambling</dd>
			    		  <dt>Author</dt>
			    		  <dd>by <?php bloginfo('name'); ?></dd>
			    		</dl>
					
					</div>
					
					<div class="info-col">
					
			    		<h2>General</h2>
			    		
			            <a class="image general" href="<?php echo home_url() ?>/category/general">View Image</a>
			    		
			    		<dl>
			    		  <dt>Description</dt>
			    		  <dd class="cat-des"><?php echo category_description(get_category_by_slug('general' )->term_id); ?></dd>
			    		  <dt>Tags</dt>
			    		  <dd>General, rambling</dd>
			    		  <dt>Author</dt>
			    		  <dd>by <?php bloginfo('name'); ?></dd>
			    		</dl>
					
					</div>
						
				</div>
			</div>
		</div>
	</div>
</div>