				<div id="" class="" role="complementary">
				
					<?php if ( is_active_sidebar( 'footer8' ) ) : ?>

						<h3 class="text-center op widgettitle">Our Partners<hr><h3>

						<?php dynamic_sidebar( 'footer8' ); ?>
                    
                         
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>