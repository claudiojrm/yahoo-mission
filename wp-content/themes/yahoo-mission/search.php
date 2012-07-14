<?php
/**
* The template for displaying Search Results pages.
*
* @package WordPress
* @subpackage Boilerplate
* @since Boilerplate 1.0
*/
?>
<?php get_header();  ?>
<?php if ( have_posts() ) : ?>
	<h1 class="page-title"><?php printf( __( 'Resultados de busca para: %s', 'boilerplate' ), '' . get_search_query() . '' ); ?></h1>
	<?php get_template_part( 'loop', 'search' ); ?>
<?php else : ?>
	<article id="post-0" class="post error404 not-found full hentry" role="main">
		<h1 class="entry-title"><?php _e( 'Nenhum resultado encontrado', 'boilerplate' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Sua busca não retornou nenhum resultado por favor tente novamente.', 'boilerplate' ); ?></p>
			<?php get_search_form(); ?>
		</div>
		<script>
			// focus on search field after it has loaded
			document.getElementById('s') && document.getElementById('s').focus();
		</script>
	</article>
<?php endif; ?>
<?php get_footer(); ?>