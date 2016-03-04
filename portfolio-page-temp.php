<?php
/*
Template Name: Portfolio page template
*/
?>

<?php get_header(); ?>
<h2 class="behind grid-on"><?php the_title(); ?></h2>

<?php include (TEMPLATEPATH . '/_/inc/structure/loader.php' ); ?>

<?php 
$script_src = get_bloginfo ( 'template_directory' )."/_/scripts/";
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
$imgs = get_field('imgs');
$tearsheets = get_field('tearsheets');
$imgs_total = count($imgs);
$imgs_counter = 0;
//echo '<pre>';print_r($imgs);echo '</pre>';
 ?>
<div id="list-view">

<?php if (isset($_GET['view']) && $_GET['view'] == 'cover-flow') { ?>
 
<?php include (TEMPLATEPATH . '/_/inc/structure/flow-view.php' ); ?>

<?php } else { ?>

<?php include (TEMPLATEPATH . '/_/inc/structure/grid-view.php' ); ?>

 <?php } ?>

</div>

<?php if ($tearsheets) { 
$tearsheet_length = count($tearsheets);
$wrap_width = 0;

foreach ($tearsheets as $sheet) {
$wrap_width += ($sheet['sizes']['tearsheet-thumb-width'] + 20);
//echo '<pre>'; print_r($sheet['sizes']['tearsheet-thumb-width']); echo '</pre>';
}

//echo '<pre>'; print_r($wrap_width); echo '</pre>';
?>

<?php include (TEMPLATEPATH . '/_/inc/structure/tearsheets.php' ); ?>

<?php } ?>
 
<div class="view-btns">
	<a href="?view=grid" id="grid-btn" class="side-btn btn-active" title="Grid view"><i class="fa fa-th fa-lg"></i></a>
	<a href="?view=cover-flow" id="cover-flow-btn" class="side-btn" title="Flow view"><i class="fa fa-camera-retro fa-lg"></i></a>
</div>	

<?php endwhile; endif; ?>
	
<?php get_footer(); ?>
