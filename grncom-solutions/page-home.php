<?php
/*
Template Name: Home kgp
*/
?>

<?php get_header(); ?>
</div>
	<div align="center" class="">
		<?php putRevSlider("demo") ?>
	</div>
<div class="container">
	<div class="row home-infor1">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer5') ) : ?><?php endif; ?>
	</div>
</div>
    <?php include 'homebanner.php'; ?>
		<div class="container">
			<div id="content" class="clearfix row">
				<div id="main" class="col-sm-12 clearfix home-warpper" role="main">					
                    <section class="post_content">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar2') ) : ?><?php endif; ?>
					</section> <!-- end article header -->
    			</div> <!-- end #main -->
    		</div> <!-- end #content -->
		</div>
		<?php include 'brandicons.php';?>
<div class="container">
<?php get_footer(); ?>
