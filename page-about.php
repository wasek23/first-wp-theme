		<?php get_header(); ?>

		<!--Start Full Content-->
		<div class="full_screen content_bg">
			<div class="screen">
				<div id="content">
					<!--Start Article-->
					<article id="ins_article">
						<?php
							if(have_posts()) :
								while(have_posts()) : the_post();
						?>
							<h1 style="font-size: 40px; text-align: center;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
							<p><?php the_content(); ?></p>
							
						<?php
								endwhile;
							else :
								echo 'Sorry, Nothing Found';
							endif;
						?>
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