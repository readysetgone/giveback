<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package giveback
 */

 get_header(); ?>

<?php if(is_home()); ?>

	<div class="home-banner">
		<h1><?php _e('Say something important here', 'giveback'); ?></h1>
		<h2><a href="<?php esc_url_raw("#");  ?>">Donate</a></h2>
	</div>
	
	<div id="primary">
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				
				<?php $args = array('posts_per_page' => 3);?>
					
				<?php $the_query = new WP_Query( $args ); ?>
	
				<?php while ( $the_query->have_posts() ) : ?>
					
					<?php $the_query->the_post();			?>
						
					<?php get_template_part('template-parts/content', 'home'); ?>
		
				<?php endwhile; ?>
			
			<?php endif; ?>
	</div>
	<div class="secondary">
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>