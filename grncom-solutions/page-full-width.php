<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
</div>			
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="section-colored-full">
				<div class="container">
					<div class="col-md-12">
						<h1 class="page-header"><?php the_title(); ?> <small><?php the_subtitle(); ?></small></h1>
							<div class="line"></div><div id="img"><img class="moving" src="."></div>
						<ol class="breadcrumb"><?php the_breadcrumb();?></ol>
					</div>
				</div>
			</div><!--section-colored-full-->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			<div class="container">
				<div class="col-sm-12 clearfix">
					<div class="row big-space">
						<header>
							<div class="col-md-12 serv">
								<?php the_post_thumbnail( 'wpbs-featured-carousel' ); ?>
               				</div>   
						</header> <!-- end article header -->
							<div class="col-md-12">
								<section class="post_content">
									<?php the_content(); ?>
								</section> <!-- end article section -->
							</div>
					</div><!--row-->
				</div><!--col-sm-12-->
			</div><!--container-->
			<div class="section-colored-full">
				<div class="container">
					<div class="col-md-12">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer9') ) : ?><?php endif; ?>
					</div>
				</div>
			</div><!--section-colored-full-->
			<div class="container">
				<div class="col-md-12 Servicesinfor">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer10') ) : ?><?php endif; ?>
				</div>
			</div>
		</article> <!-- end article -->
			<?php comments_template(); ?>
				<?php endwhile; ?>	
					<?php else : ?>
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
	<?php endif; ?>
<div class="container">
<?php get_footer(); ?>



			

