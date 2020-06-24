<!--Start Slider-->
<div class="full_screen section_bg">
	<div class="screen">
		<section>
			<div id="section">
				<div class="bnrLft">
				  <div id="banner-slide">
					<!-- start Basic Jquery Slider -->
					<ul class="bjqs">
					
						
						<?php
							
							$myslider = new WP_Query(
								array(
									'post_type' => 'bjqs_slider',
								)
							);
							
							while($myslider->have_posts()) : $myslider->the_post();
						?>
						
						<li>
							<?php the_post_thumbnail();?>
						</li>
						
						<?php
							endwhile;
						?>
						
						
					</ul>
					<!-- end Basic jQuery Slider -->
				  </div>
				</div>						
			</div> <!-- Finish Section -->
		</section>					
	</div>
</div>
<!--Finish Slider-->