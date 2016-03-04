<?php
/*
Template Name: User login pages
*/
?>

<?php get_header('user'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php the_content(); ?>

<?php endwhile; endif; ?>
	
<?php get_footer('user'); ?>
