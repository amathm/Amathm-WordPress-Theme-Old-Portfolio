
</div>	
<!-- footer.php below -->
<!-- Footer content -->
<footer id="footer">
	<div class="container">
	
	<!-- ><nav class="footer-nav">
	<?php /* footer nav if needed
	$args = array(
		'theme_location' => 'footer'
	);
	
	*/?>
	<?php wp_nav_menu($args); ?>
	</nav> -->
	
	
	
	<h6><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></h6>
	</div>
</footer><!-- /#footer -->


</div><!-- End of Container div -->
</div><!-- /wrapper div end -->

<!-- Jquery and bootstrap javascript frameworks below -->

<?php wp_footer(); ?>
</body>
</html>