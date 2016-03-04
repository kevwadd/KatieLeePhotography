		</div><!-- #Main Content -->

</div>
		
<aside id="contact-info" class="side-panel side-closed">
	<div id="contact-content" class="side-content">
		<h2>Contact details</h2>
		<a href="mailto:mail@katieleephotography.com" title="Email Katie" class="email"><i class="fa fa-envelope-o fa-lg"></i> mail@katieleephotography.com</a>
		<span class="tel"><i class="fa fa-phone fa-lg"></i> 07740683066</span>
		<div id="contact-form">
		<?php gravity_form(1,true, false, false, null, true, 0); ?>
		</div>
	</div>
<a href="#close" title="close" id="close-contact" class="close"><i class="fa fa-times fa-lg"></i></a>
</aside>
	
<footer role="site-info" class="side-closed">
		
		<div class="social">
			<a href="https://www.facebook.com/KatieLeePhotographyuk" title="Follow me on Facebook" target="_blank";><i class="fa fa-facebook-square fa-lg"></i><span>Facebook</span></a>
			<a href="https://twitter.com/katieleephoto" title="Follow me on Twitter" target="_blank";><i class="fa fa-twitter-square fa-lg"></i><span>Twitter</span></a>
			<a href="http://www.linkedin.com/in/katieleephotography" title="View me on LinkedIn" target="_blank";><i class="fa fa-linkedin-square fa-lg"></i><span>LinkedIn</span></a>
			<a href="https://plus.google.com/118301467129019347737" title="View me on Google+" target="_blank";><i class="fa fa-google-plus-square fa-lg"></i><span>Google+</span></a>
		</div>
	
		<small>&copy; Katie Lee Photography <?php echo date("Y");  ?>.<br>All Rights Reserved.</small>

</footer>

<noscript>
		
<?php $no_script_notice = get_field('no_script_notice', 'option'); ?>

	<div class="no-script-wrap">
		<div class="no-script-inner-wrap">
	
			<div class="no-script-inner">
				<h3>Sorry your Javascript is turned off</h3
				><p>This website relies on Javascript for it's functionality.<br />
				For the best experience please turn on your Javascript and click the refresh button below.</p>
				<a href="<?php echo get_option('home'); ?>" title="refresh" class="btn btn-default btn-lg btn-block"><i class="fa fa-refresh fa-lg"></i> Refresh</a>
			</div>
		
		</div>
	</div>
	
</noscript>


<?php wp_footer(); ?>
	
</body>

</html>
