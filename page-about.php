<?php get_header(); ?>

<div id="container" class="clearfix"> <!-- #container -->

<?php if (have_posts()) : while (have_posts()) : the_post(); 
$clients = get_field('clients');
//echo '<pre>';print_r($clients);echo '</pre>';
?>
		
	<article class="page" id="page-<?php the_ID(); ?>">

		<h2><?php the_title(); ?></h2>

		<div class="entry<?php echo ( !empty($clients) ) ? ' with-aside':''; ?>">
		
		<div class="polaroid">
			<div class="inner-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/_/img/katie-profile.jpg" alt="Katie Lee">
			</div>
		</div>

			<?php the_content(); ?>

		</div>
		
		<?php if (!empty($clients)) { ?>
		<aside class="sidebar">
			
			<div class="block">
			
				<h3><i class="fa fa-angle-right"></i>Clients</h3>
				<ul class="clients">
					<?php foreach ($clients as $item) { ?>
					<li><?php echo $item['client']; ?></li>
					<?php } ?>
				</ul>
			
			</div>
			
		</aside>
		<?php }  ?>
		
				
	</article>

	<?php endwhile; endif; ?>

</div> <!-- #container -->
	
<?php get_footer(); ?>
