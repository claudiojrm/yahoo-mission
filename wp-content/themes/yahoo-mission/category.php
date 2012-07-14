<?php
/**
* The Template for displaying all single posts.
*
* @package WordPress
* @subpackage Boilerplate
* @since Boilerplate 1.0
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) the_post(); ?>
<?php rewind_posts(); ?>
<?php get_template_part('loop', 'category'); ?>
<?php get_footer(); ?>