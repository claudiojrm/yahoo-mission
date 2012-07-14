<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<?php get_header();  ?>
<?php if ( have_posts() ) the_post(); ?>
<h1 class="page-title"><?php printf( __( 'Arquivos do autor: %s', 'boilerplate' ), get_the_author() ); ?></h1>
<?php rewind_posts(); ?>
<?php get_template_part('loop', 'author'); ?>
<?php get_footer();  ?>