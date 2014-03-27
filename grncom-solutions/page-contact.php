<?php
/*
Template Name: contact Page
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
			<div class="container big-space">
				<div class="row">
        <div class="col-sm-8">
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				<section class="post_content">
					<?php the_content(); ?>
				</section> <!-- end article section -->
			</div><!--col-sm-8-->	
				<div class="col-sm-4">
       				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?><?php endif; ?>
       			</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-lg-12 maps">
    	   				<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer6') ) : ?><?php //endif; ?>
        			</div>
        		</div>
			</article> <!-- end article -->
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
        
       	

</div><!--container-->
<div class="container">
<?php get_footer(); ?>
