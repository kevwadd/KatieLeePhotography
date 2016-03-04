<?php
/*
Template Name: Instagram page template
*/
?>

<?php get_header(); ?>
<h2 class="behind"><?php the_title(); ?></h2>

<?php include (TEMPLATEPATH . '/_/inc/structure/loader.php' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="instagram-view">
<?php echo do_shortcode('[alpine-phototile-for-instagram id=997 user="katieleephotography1" src="user_recent" imgl="fancybox" style="cascade" col="4" size="M" num="16" shadow="1" border="1" highlight="1" align="center" max="100" nocredit="1"]'); ?>
</div>


<?php endwhile; endif; ?>
	
<?php get_footer(); ?>
