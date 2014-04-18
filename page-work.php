<?php get_header(); ?>


	<div class="welcome welcome_about">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>


	<div class="tagline"><h4>Selected Work</h4></div>

	<div class="work_rows" id="portfolioList">
		<div class="mgrid_wrap">
		<?php $loop = new WP_Query( array( 'post_type' => 'work', 'posts_per_page' => 150, 'orderby' => 'menu_order' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php 
				$short = get_post_meta($post->ID, "work_short", $single = true); 
				$type = get_post_meta($post->ID, "work_type", $single = true);
			?>
			<div class="mgrid_4">
				<a href="<?php the_permalink() ?>">
				<?php if ($type == 'web') : ?>
					<div class="work_piece_browser wpw">
						<img class="wp_frame" src="<?php bloginfo('template_directory'); ?>/images/browser_frame.svg" alt="Browser Frame" />
						<?php the_post_thumbnail('work_web'); ?>
						<img class="wp_shadow" src="<?php bloginfo('template_directory'); ?>/images/browser_shadow.png" alt="Browser Shadow" />
					</div>
				<?php elseif ($type == 'mobile') : ?>
					<div class="work_piece_mobile wpw">
						<img class="wp_frame" src="<?php bloginfo('template_directory'); ?>/images/phone_frame.svg" alt="iOS Frame" />
						<?php the_post_thumbnail('work_mobile'); ?>
						<img class="wp_shadow" src="<?php bloginfo('template_directory'); ?>/images/phone_shadow.png" alt="iOS Shadow" />
					</div>
				<?php elseif ($type == 'other') : ?>
					<div class="work_piece_browser wpw">
						<?php the_post_thumbnail('work_web'); ?>
						<img class="wp_shadow" src="<?php bloginfo('template_directory'); ?>/images/misc_shadow.png" alt="iOS Shadow" />
					</div>
				<?php endif; ?>
				</a>
				<p><?php echo $short; ?></p>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<div class="tagline"><h4><span>Client</span> Experience</h4></div>

	<div class="client_experience">
		<img src="<?php bloginfo('template_directory'); ?>/images/companies.png" alt="Client Experience" />
	</div>
	

<?php get_footer(); ?>