<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<article id="post-not-found" class="clearfix">
						
						<header>

							<div class="hero-unit">
							
								<h1><?php _e("PAGE NOT FOUND","bonestheme"); ?></h1>
								<h2>アクセスされたページは見つかりませんでした</h2>
								<p>
									ページ上部のメニューからアクセスするか検索してみてください。<br />
									お急ぎでなければこちらのPVもどうぞ！
								</p>
								<p  class="text-center">
									<iframe width="560" height="315" src="//www.youtube.com/embed/ITkr7rEtP4I?rel=0" frameborder="0" allowfullscreen></iframe>
								</p>
															
							</div>
													
						</header> <!-- end article header -->
					
						<section class="post_content">
							
							<p>検索はこちらから</p>

							<div class="row-fluid">
								<div class="span12">
									<?php get_search_form(); ?>
								</div>
							</div>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>