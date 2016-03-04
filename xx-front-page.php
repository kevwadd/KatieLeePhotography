<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/_/inc/structure/loader.php' ); ?>

<?php  

$script_src = get_bloginfo ( 'template_directory' )."/_/scripts/";

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
$imgs = get_field('imgs');
$imgs_total = count($imgs);
$imgs_counter = 0;
//echo '<pre>';print_r($imgs);echo '</pre>';
 ?>

<div id="list-view">

<?php if (isset($_GET['view']) && $_GET['view'] == 'grid') { ?>
<!-- grid -->
<div id="home-grid" class="grid-view">
	<?php foreach ($imgs as $img) { ?>
	
	<div class="img">
		<a href="<?php echo $img['url']; ?>"<?php echo ($img['alt']) ? ' alt="'.$img['alt'].'"' : ''; ?><?php echo ($img['description']) ? ' title="'.$img['description'].'"' : ''; ?> class="fancybox" rel="fancybox">
			<img src="<?php echo $img['sizes']['thumbnail']; ?>" width="<?php echo $img['sizes']['thumbnail-width']; ?>" height="<?php echo $img['sizes']['thumbnail-height']; ?>">
		</a>
	</div>
	<?php } ?>
</div>
<!-- grid -->

<?php } else { ?>

<!-- slider -->
<div id="home-slider" class="image-view"> 

	<div class="cover-flow-view">

		<?php foreach ($imgs as $img) { 
		$imgs_counter++;
		$slide_state = false;
		//echo '<pre>';print_r($img);echo '</pre>';
		
		if ($imgs_counter == 1) {
		$slide_state = " active";	
		}
		
		if ($imgs_counter == 2) {
		$slide_state = " next";	
		}
		
		if ($imgs_counter == $imgs_total) {
		$slide_state = " prev";	
		}
		
		$calc_width = $img['width'] - ($img['width']/4);
		
		if ($calc_width > $img[height]) {
		$size = ' width="'.$img[width].'"';
		$orientation = "land";
		} else {
		$size = 'height="'.$img[height].'"';
		$orientation = "port";
		}
		
		?>
		
		
		<div id="slide-<?php echo $imgs_counter; ?>" class="slide<?php echo ($slide_state) ? $slide_state:""; ?>">
		
			<div class="img <?php echo $orientation; ?>">
				<img src="<?php echo $img['url']; ?>"<?php echo $size; ?>>
			</div>
			
			<?php if ($img['description']) { ?>
			<div class="caption caption-hidden">
			<p><?php echo $img['description']; ?></p>
			<button class="close-btn"><i class="fa fa-times fa-lg"></i></button>
			</div>
			<?php } ?>
						
		</div>
		<?php } ?>
	
	</div>

	<div class="next-prev-btns">
		<button id="prev-slide"><i class="fa fa-arrow-up fa-lg"></i><i class="fa fa-arrow-left fa-lg"></i></button>
		<button id="next-slide"><i class="fa fa-arrow-down fa-lg"></i><i class="fa fa-arrow-right fa-lg"></i></button>
	</div>
	
	<button class="info-btn btn-hidden"><i class="fa fa-info fa-lg"></i></button>
		
</div> <!-- slider -->

<?php } ?>

</div>

<div class="view-btns">
	<a href="?view=cover-flow" id="cover-flow-btn" class="side-btn btn-active" title="Flow view"><i class="fa fa-camera-retro fa-lg"></i></a>
	<a href="?view=grid" id="grid-btn" class="side-btn" title="Grid view"><i class="fa fa-th fa-lg"></i></a>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
