<?php
/**
* The template for displaying 404 pages (Not Found).
*
* @package WordPress
* @subpackage Boilerplate
* @since Boilerplate 1.0
*/
?>
<?php get_header(); ?>
<h1 class="page-title"><?php bloginfo( 'name' ); ?></h1>
<article id="post-0" class="post error404 not-found hentry" role="main">
	<h1 class="entry-title"><?php _e( 'Página não encontrada', 'boilerplate' ); ?></h1>
	<div class="entry-content">
		<p><?php _e( 'Desculpe-nos mas a página que você procura não foi encontrada, talvez o campo de busca abaixo possa ajudar.', 'boilerplate' ); ?></p>
		<?php get_search_form(); ?>
	</div>
	<script>
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
</article>
<?php get_footer(); ?>
