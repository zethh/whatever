<?php
/*
Template Name: Forum
*/
?>
<?php get_header(); ?>

	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry">
			<?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
			<?php the_content(); ?>
			<div class="clear"></div>
		</div>
			<?php endwhile; ?>

			<?php endif; ?>				
	</div>

	<?php get_footer(); ?>
<?php get_sidebar(); ?>