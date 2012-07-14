<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
			<?php if(!is_home()) get_sidebar(); ?>
		</section><!-- #content -->
		<?php if(!is_home()){ ?>
		<footer role="contentinfo">
			<h5 class="ir">Yahoo!</h5>
			<time>2012©</time>
		</footer><!-- footer -->
		<?php } ?>
	</div><!-- #main -->
	<?php wp_footer(); ?>
	</body>
</html>