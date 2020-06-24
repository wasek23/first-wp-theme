		<?php get_header(); ?>
		
		<!--Start Slider-->
		<?php get_template_part('slider'); ?>
		<!--Finish Slider-->
		
		<!--Start Full Content-->
		<div class="full_screen content_bg">
			<div class="screen">
				<div id="content">
					<!--Start Article-->
					<article id="article">
						<?php
							if(have_posts()) :
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
						
						<!--Pagination-->
						<?php
							// Protect against arbitrary paged values
							$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
							
							$args = array(
								'post_type' => 'post',
								'post_status'=>'publish',
								'paged' => $paged,
							);
							
							$the_query = new WP_Query($args);
						?>
						
						<div id="pagination">
							<?php
							echo paginate_links( array(
								'format'  => 'page/%#%',
								'current' => $paged,
								'total'   => $the_query->max_num_pages,
								'mid_size'        => 2,
								'prev_text'       => __('&laquo; Prev'),
								'next_text'       => __('Next &raquo;')
							) );
							?>
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
		
		<!--Start Footer-->
		<?php get_template_part('footer_widget'); ?>
		<?php get_footer(); ?>