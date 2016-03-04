<!-- slider -->

<div id="portfolio-slider" class="image-view"> 
	
	<div class="cover-flow-view">
	
		<?php foreach ($imgs as $img) { 
		$imgs_counter++;
		$slide_state = false;
		//echo '<pre>';print_r($img['url']);echo '</pre>';
		
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
		
		
		if ($calc_width > $img['height']) {
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
