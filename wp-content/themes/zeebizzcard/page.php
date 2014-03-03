
<?php get_header(); ?>

	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php $title = get_the_title();
				if ($title != "Forum"){
					echo '<h2 class="page-title">' . $title . '</h2>';
				}
				?>
				<?php edit_post_link(__( 'Edit', 'themezee_lang' )); ?>

				<div class="entry">					
					<?php the_content(); ?>
					<div class="clear"></div>
					<?php wp_link_pages(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php endif; ?>
		
		<?php comments_template(); ?>
		
	</div>

	<?php get_footer(); ?>	
<?php get_sidebar(); ?>	