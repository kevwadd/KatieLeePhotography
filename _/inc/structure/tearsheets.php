<div class="tearsheets side-closed panel-up">
	<button id="tearsheets-btn" class="btn">Tearsheets <i class="fa fa-angle-down"></i><i class="fa fa-times"></i></button>
	
	<div class="inner-wrap">
		<ul style="width: <?php echo $wrap_width+20; ?>px">
			
			<?php foreach ($tearsheets as $tearsheet) { ?>
			<li>
			<a href="<?php echo $tearsheet['url']; ?>" rel="tearsheet" class="fancybox"<?php echo ($tearsheet['alt']) ? ' alt="'.$tearsheet['alt'].'"' : ''; ?><?php echo ($tearsheet['description']) ? ' title="'.$tearsheet['description'].'"' : ''; ?>>
				<img src="<?php echo $tearsheet['sizes']['tearsheet-thumb']; ?>" width="<?php echo $tearsheet['sizes']['tearsheet-thumb-width']; ?>" height="<?php echo $tearsheet['sizes']['tearsheet-thumb-height']; ?>">
				<i class="fa fa-search-plus fa-2x"></i>
			</a>
			</li>
			<?php } ?>
			
		</ul>
	</div>
	
</div>