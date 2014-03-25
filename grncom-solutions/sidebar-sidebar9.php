				<div id="services" class="" role="complementary">
				
					<?php if ( is_active_sidebar( 'footer9' ) ) : ?>

						<?php dynamic_sidebar( 'footer9' ); ?>
                    
                         
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>