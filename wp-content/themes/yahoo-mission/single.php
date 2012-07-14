<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

/* 
* atribui a uma variável as categorias do post 
* faz um loop verificando se existe a categoria "dicas-de-especialistas", se existir seta variável $video = true
* verifica se existe a categoria "sobre-o-mercado" || "sobre-a-cyrela", se existir seta variável $ancora = true
*/
?>
<?php if(have_posts()) the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<div class="navigation">
		<span class="ant"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<', 'Ler anterior', 'boilerplate' ) . '</span> Ler anterior', true ); ?></span>
		<span class="prox"><?php next_post_link( '%link', 'Ler próxima <span class="meta-nav">' . _x( '>', 'Ler próxima', 'boilerplate' ) . '</span>', true ); ?></span>
	</div><!-- #nav-above -->
</article>