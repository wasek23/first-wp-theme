<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<div class="post_info">
	Posted By: <?php the_author_posts_link(); ?>
	| Posted On: <?php the_time('M d, Y'); ?>
	| Posted in: <?php the_category(', '); ?>
	| <?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'comment_post_info', 'Comments Off'); ?>
</div>

<div class="featured_img">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
</div>

<p><?php echo excerpt('55'); ?></p>

<div class="end_post"></div>