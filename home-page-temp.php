<?php
/*
Template Name: Front page template
*/
?>

<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/_/inc/structure/loader.php' ); ?>

<?php  

$script_src = get_bloginfo ( 'template_directory' )."/_/scripts/";

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
$imgs = get_field('imgs');
$imgs_total = count($imgs);
$land_imgs = array();
$port_imgs = array();

foreach($imgs as $img) {

	if ($img[width] > $img[height]) {
	array_push($land_imgs, $img);
	} else {
	array_push($port_imgs, $img);	
	}
}
//echo '<pre>';print_r($port_imgs);echo '</pre>';
 ?>

<div id="home-view">

	<div class="img-row top-row">
		<div class="flip-container land img" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front" style="background-image: url(<?php echo $land_imgs[0][url]; ?>);"></div>
				<div class="back" style="background-image: url(<?php echo $land_imgs[1][url]; ?>);"></div>
			</div>
		</div>
		
		<div class="flip-container port img left" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front" style="background-image: url(<?php echo $port_imgs[0][url]; ?>);"></div>
				<div class="back"style="background-image: url(<?php echo $port_imgs[1][url]; ?>);"></div>
			</div>
		</div>
		
		<div class="flip-container port img right" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front" style="background-image: url(<?php echo $port_imgs[2][url]; ?>);"></div>
				<div class="back"style="background-image: url(<?php echo $port_imgs[3][url]; ?>);"></div>
			</div>
		</div>
	</div>
	
	<div class="img-row bot-row">
		<div class="flip-container port img left" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front" style="background-image: url(<?php echo $port_imgs[4][url]; ?>);"></div>
				<div class="back"style="background-image: url(<?php echo $port_imgs[5][url]; ?>);"></div>
			</div>
		</div>
		
		<div class="flip-container port img right" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front" style="background-image: url(<?php echo $port_imgs[6][url]; ?>);"></div>
				<div class="back"style="background-image: url(<?php echo $port_imgs[7][url]; ?>);"></div>
			</div>
		</div>
		
		<div class="flip-container land img" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front" style="background-image: url(<?php echo $land_imgs[2][url]; ?>);"></div>
				<div class="back" style="background-image: url(<?php echo $land_imgs[3][url]; ?>);"></div>
			</div>
		</div>
		
	</div>
	
	<div class="rule rule-mid"></div>
	<div class="rule rule-right"></div>
	<div class="rule rule-left"></div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
