<?php
/**
 * The loop that displays posts.
 */
 $y    = 6;
 $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $page = ($page-1)*$y;
?>
<?php if ( ! have_posts() ) : ?>
	<article id="post-0" class="post error404 not-found hentry" role="main">
		<h1 class="entry-title"><?php _e( 'Página não encontrada' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Desculpe-nos mas a página que você procura não foi encontrada, talvez o campo de busca abaixo possa ajudar.' ); ?></p>
		</div>
	</article>
<?php endif; ?>

<?php $x = 0; ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="hentry <?php echo $x%2 ? 'odd' : 'even'?>">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo $x+1+$page; ?># <?php the_title(); ?></a></h1>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
		<div class="widgets">
			<div class="short">
				<span>www.y.me/<?php echo $x; ?></span>
				<a href="#" title="Copiar" class="copy">Copiar</a>
			</div>
			<div class="compartilhe">
				<div>
					<div id="fb-root"></div>
					<span class="fb"><div class="fb-send" data-href="http://elav.com.br"></div></span>
					<span><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="http://elav.com.br" data-lang="da">Tweet</a></span>
					<span><g:plusone size="medium" annotation="none" href="http://elav.com.br"></g:plusone></span>
					<a href="#" title="Wordpress" class="ico-wp ir">Wordpress</a>
					<a href="http://www.tumblr.com/share" title="Tumblr" class="ico-tumblr ir">Tumblr</a>
				</div>
				<label>Missão cumprida <input type="checkbox" checked disabled></label>
			</div>
		</div>
		<span class="points">+50</span>
	</article>
<?php $x++; ?>
<?php endwhile; ?>
<?php 
$y = $y-$x; 
for($i = 0; $i < $y; $i++){
?>
<div class="hentry coming  <?php echo ($y-$i)%2 ? 'odd' : 'even'?>">
	<span></span>
</div>
<?php } ?>
<?php if (  $wp_query->max_num_pages > 1) : ?>
	<?php wp_pagenavi(); ?>
<?php endif; ?>