<nav role="main-nav">	
	<?php
	$main_nav_args = array(
	'post_type' => 'klp_portfolio',
	'numberposts' => -1,
	'post_parent' => 0
	);
	$main_nav_items = get_posts($main_nav_args);
	?>
	<ol>
		<?php foreach ($main_nav_items as $main_nav_item) {
		$url_raw = get_permalink($main_nav_item->ID);
		$url_split = $url_raw;
		$domain_url = get_option('home');
		list($domain, $url) = split($domain_url, $url_split);
		
		//echo '<pre>';print_r($url);echo '</pre>';
		?>
		
		<li id="main-nav-<?php echo $main_nav_item->post_name; ?>" class="main-nav-link"><a href="<?php echo $url_raw; ?>"><?php echo $main_nav_item->post_title; ?></a></li>
		
		<?php } ?>
	</ol>
</nav>