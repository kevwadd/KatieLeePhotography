<?php get_header(); ?>

<div id="container" class="clearfix"> <!-- #container -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-content">
			
			<?php the_content(); ?>

		</div>
		
	</article>

<?php endwhile; endif; ?>

</div> <!-- #container -->

<?php get_footer(); ?>