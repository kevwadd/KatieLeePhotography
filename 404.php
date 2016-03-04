<?php get_header(); ?>

<div id="container" class="clearfix"> <!-- #container -->

<article class="page" id="page-<?php the_ID(); ?>">

	<h2>Oops, Page not found!</h2
				
	<p><strong>You have requested a page or file which does not exist.</strong></p>
	
	<p>Here are a few options to find what you are looking for.</p>
	
	<p><strong class="red-txt">1)</strong> Double check the web address for typos.<br>
	<strong class="red-txt">2)</strong> Head back to our <a href="<?php echo get_option('home'); ?>" title="Home page">home page</a>.<br>
	</p>
	</article>

</div> <!-- #container -->

<?php get_footer(); ?>