<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<?php get_header();  ?>
<?php if ( have_posts() ) the_post(); ?>
<h1 class="page-title">
	Arquivos do
	<?php
		if ( is_day() ) printf( __( 'dia: %s', 'boilerplate' ), get_the_date() );
		elseif ( is_month() ) printf( __( 'mês: %s', 'boilerplate' ), get_the_date('F Y') );
		elseif ( is_year() ) printf( __( 'ano: %s', 'boilerplate' ), get_the_date('Y') );
		else _e( 'blog', 'boilerplate' );
	?>
</h1>
<?php rewind_posts(); ?>
<?php get_template_part('loop', 'archive'); ?>
<?php get_footer(); ?>