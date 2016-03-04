<div id="home-grid" class="grid-view">

	<?php if (!empty($post->post_content)) { ?>
		<article class="porfolio-intro">
			<div class="intro-wrap">
			<?php the_content(); ?>
			</div>
		</article>
	<?php } ?>
	
	<?php foreach ($imgs as $img) { ?>
	
	<div class="img">
		<a href="<?php echo $img['url']; ?>"<?php echo ($img['alt']) ? ' alt="'.$img['alt'].'"' : ''; ?><?php echo ($img['description']) ? ' title="'.$img['description'].'"' : ''; ?> class="fancybox">
			<img src="<?php echo $img['sizes']['thumbnail']; ?>" width="<?php echo $img['sizes']['thumbnail-width']; ?>" height="<?php echo $img['sizes']['thumbnail-height']; ?>">
		</a>
	</div>
	<?php } ?>
</div>