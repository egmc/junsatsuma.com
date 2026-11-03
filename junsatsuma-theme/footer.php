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

						<p class="attribution">&copy; junsatsuma.com&nbsp;since 2005 / <a href="/privacy-policy">Privacy Policy</a></p>

					</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->


		<?php wp_footer(); // js scripts are inserted using this function ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-6HX245VPKN"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-6HX245VPKN');
		</script>

	</body>

</html>
