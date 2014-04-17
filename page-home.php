<?php get_header(); ?>


	<div class="welcome welcome_home">
		<h1>HOWDY, WE'RE ARGYLL STUDIOS.</h1>
		<h3>We craft custom-tailored websites, hand-stiched with precision. <a href="<?= contactLink('home_welcome') ?>">Schedule a fitting...</a></h3>
	</div>


	<img id="welcomeHero" src="<?php bloginfo('template_directory'); ?>/images/hero.png" alt="" />
	

	<div class="welcome_txt">
		<div class="site_sep grid_18"></div>
		<div class="grid_6 alpha">
			<h2>Fine Quality Development</h2>
			<p>WordPress is our preferred platform for web development, and one we're highly experienced with. We can accomplish most anything through it's robust admin panel, but can also build apps and websites using other popular technologies. <a href="<?php echo get_settings('home'); ?>/services">View Our Services...</a></p>
		</div>
		<div class="grid_6">
			<h2>Bespoke Design</h2>
			<p>Our design services stretch as far your needs. We can take your existing brand to the next level or help build it from the ground up. Your website is the first impression many people will have of your business. We make sure it's a good one. <a href="<?php echo get_settings('home'); ?>/work">Check Out Our Work...</a></p>
		</div>
		<div class="grid_6 omega">
			<h2>Your In-House Department</h2>
			<p>Our team is small by design and will work closely with you throughout all stages of your project. You'll speak directly to our designers and developers and have the opportunity to discuss important decisions with the people actually doing the work.  <a href="<?php echo get_settings('home'); ?>/about">How We Work...</a></p>
		</div>
	</div>
	
	
	<div class="recent_work">
		<div class="tagline"><h4>Recent Work</h4></div>
		<div class="mgrid_wrap homeWR">
			<?php $loop = new WP_Query( array( 'post_type' => 'work', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php 
					$short = get_post_meta($post->ID, "work_short", $single = true); 
					$type = get_post_meta($post->ID, "work_type", $single = true);
				?>
				<div class="mgrid_4">
					<a href="<?php the_permalink(); ?>">
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
					<p><?php echo $short; ?></p>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>


<?php get_footer(); ?>