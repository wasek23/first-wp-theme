		<?php get_header();
		/*
			Template Name: Full Width Template
		*/
		?>
		
		<!--Start Full Content-->
		<div class="full_screen content_bg">
			<div class="screen">
				<div id="content">
					<!--Start Article-->
					<article id="ins_article" style="width: 100%; border-right: none;">
						<?php
							if(have_posts()) :
								while(have_posts()) : the_post();
						?>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
							<div class="post_info">
								Posted By: <?php the_author_posts_link(); ?>
								| Posted On: <?php the_time('M d, Y'); ?>
							</div>
							
							<div class="featured_img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
							</div>
							
							<p><?php the_content(); ?></p>
							
						<?php
								endwhile;
							else :
								echo 'Sorry, Nothing Found';
							endif;
						?>
					</article>
					<!--Finish Article-->
				</div>					
			</div>
		</div>
		<!--Finish Full Content-->
		
		<?php get_footer(); ?>