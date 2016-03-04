<?php get_header(); ?>

<div id="container" class="clearfix"> <!-- #container -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<article class="page" id="page-<?php the_ID(); ?>">

		<h2><?php the_title(); ?></h2>

		<div class="entry">

			<?php the_content(); ?>

		</div>

	</article>

	<?php endwhile; endif; ?>

</div> <!-- #container -->
	
<?php get_footer(); ?>
