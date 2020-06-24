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
							<?php $post = $posts[0]; /*Hack. Set $post so that the_date() works.*/ ?>
							
							<?php /* If this is a category archive */ if(is_category()) { ?>
								Archive For "<em><?php echo single_cat_title(); ?></em>" Category
								
							<?php /* If this is a tag archive */ }elseif( is_tag() ) { ?>
								Archive For "<em><?php single_tag_title(); ?></em>" Tag
								
							<?php /* If this is a daily archive */ }elseif(is_day()) { ?>
								Archive For "<em><?php the_time('F jS, Y'); ?></em>"
								
							<?php /* If this is a monthly archive */ }elseif(is_month()) { ?>
								Archive For "<em><?php the_time('F, Y'); ?></em>"
								
							<?php /* If this is a yearly archive */ }elseif(is_year()) { ?>
								Archive For "<em><?php the_time('Y'); ?></em>"
								
							<?php /* If this is a search */ }elseif(is_search()) { ?>
								Search Results For "<em><?php the_search_query(); ?></em>"
								
							<?php /* If this is an author archive */ }elseif(is_author()) { ?>
								Archive For "<em><?php echo get_the_author(); ?></em>" Author
								
							<?php /* If this is a paged archive */ }elseif(isset($_GET['paged']) && !empty($_GET['paged'])) { ?> <?php _e('Blog Archives'); }?>
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