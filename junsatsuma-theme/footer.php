			</div> <!-- end #container -->
			
			<footer role="contentinfo" id="footer">
					<div id="inner-footer" class="clearfix container-fluid">
			          <div id="widget-footer" class="clearfix row-fluid">
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
			            <?php endif; ?>
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
			            <?php endif; ?>
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
			            <?php endif; ?>
			          </div>
						
						<nav class="clearfix">
							<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
						</nav>
				
						<p class="attribution">&copy; junsatsuma.com&nbsp;since 2005</p>
					
					</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46511169-1', 'junsatsuma.com');
  ga('send', 'pageview');

</script>

	</body>

</html>