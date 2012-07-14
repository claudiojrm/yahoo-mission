<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<?php get_header();  ?>
<?php if ( have_posts() ) the_post(); ?>
<h1 class="page-title"><?php printf( __( 'Arquivos de tags: %s', 'boilerplate' ), '' . single_tag_title( '', false ) . '' ); ?></h1>
<?php rewind_posts(); ?>
<?php get_template_part('loop', 'tag'); ?>
<?php get_footer(); ?>