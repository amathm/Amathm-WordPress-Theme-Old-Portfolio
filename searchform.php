
<form id="search-form" role="search" method="get" class="form-inline search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group has-success has-feedback">
	<label  class="control-label">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input id="search" type="search" class="form-control search-field" placeholder="<?php the_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<button class="glyphicon glyphicon-search btn btn-default icon-search" type="submit"></button>
	</label>
	</div>
	<input type="hidden" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
	
</form>