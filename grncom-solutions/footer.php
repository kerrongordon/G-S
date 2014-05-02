	</div> <!-- end #container -->
<div class="footer-bg-color">
		<div class="container">
			<footer role="contentinfo">
			<div class="top"><a href="#top"><i class="fa fa-arrow-circle-up fa-2x"></i></a></div>
				<div id="inner-footer" class="clearfix">
		          
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right"><a href="https://plus.google.com/u/0/+kerrongordon/" target="_blank" id="credit320" title="Design by Kerron Gordon">Design by Kerron Gordon</a></p>
			
					<p class="attribution">&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
</div><!--footer-bg-color-->				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script>
 			new WOW().init();
		</script>
	</body>

</html>
