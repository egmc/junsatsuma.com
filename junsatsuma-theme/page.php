<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<?php if (the_title("", "", false) == 'top') { ?>
							<div id="slideshow">
							<img src="/wp-content/themes/junsatsuma-theme/images/top_main_visual6_970-500.jpg" class="active" />
							<img src="/wp-content/themes/junsatsuma-theme/images/top_main_visual5_970-500.jpg" />
							<img src="/wp-content/themes/junsatsuma-theme/images/top_main_visual7_970-500.jpg" />
							<img src="/wp-content/themes/junsatsuma-theme/images/top_main_visual8_970-500.jpg" />
							<img src="/wp-content/themes/junsatsuma-theme/images/top_main_visual3_970-500.jpg" />
							<img src="/wp-content/themes/junsatsuma-theme/images/top_main_visual4_970-500.jpg" />
							</div>
							<script type="text/javascript">
							jQuery(function() {
								var slideSwitch = function () {
								var $ = jQuery;
							    var $active = $('#slideshow IMG.active');

							    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

							    var $next =  $active.next().length ? $active.next()
							        : $('#slideshow IMG:first');

							    $active.addClass('last-active');
							        
							    $next.css({opacity: 0.0})
							        .addClass('active')
							        .animate({opacity: 1.0}, 1000, function() {
							            $active.removeClass('active last-active');
							        });
								};
							    setInterval(slideSwitch, 7000 );
							});
							</script>
							<?php  } else { ?>
							<div class="page-header"><h1><img src="<?php echo getTitleImageURL(); ?>" /></h1></div>
						 	<?php } ?>
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
