		<?php get_header(); ?>
		
		<!--Start Full Content-->
		<div class="full_screen content_bg">
			<div class="screen">
				<div id="content">
					<!--Start Article-->
					<article id="article">
						<?php
							if(have_posts()) :
						?>
						
						<h2>
							<?php if(is_search()) { ?>
							Search Results For "<em><?php the_search_query(); }?></em>"
						</h2>
						
						<?php
								while(have_posts()) : the_post();
						?>
						
						<?php get_template_part('content'); ?>
						
						<?php
								endwhile;
							else :
								echo 'Sorry, Nothing Found';
							endif;
						?>
						
						<div class="pagination">
							<div class="prev"><?php previous_posts_link('&laquo; Prev'); ?></div>
							<div class="next"><?php next_posts_link('Next &raquo;'); ?></div>
							<div class="clearfix"></div>
						</div>
						
					</article>
					<!--Finish Article-->
					
					<!--Start Sidebar-->
					<?php get_sidebar(); ?>
					<!--Finish Sidebar-->
				</div>					
			</div>
		</div>
		<!--Finish Full Content-->
		
		<?php get_footer(); ?>