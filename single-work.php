<?php get_header(); ?>


	<div class="workTop">
		<div class="grid_9 wtLeft alpha"><a href="<?php echo get_settings('home'); ?>/work" class="leftArrow">Back to All Work Pieces</a></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="grid_9 wtRight omega mbump"><?php next_post_link('%link', 'Next Piece'); ?> <i class="sep"></i> <?php previous_post_link('%link', 'Previous Piece'); ?></div>
		<?php endwhile; endif; ?>
	</div>
	

	<div class="omni singleWrap" id="pageWrap">
		<div class="grid_14 alpha" id="workLeft">
			<div class="plInner">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php 
						
						$title = get_the_title(); 
						$type = get_post_meta($post->ID, "work_type", $single = true);
						$class = $type == 'web' ? 'web' : 'mobile';
						$im1 = get_post_meta($post->ID, "work_image_1", $single = true);
						$im2 = get_post_meta($post->ID, "work_image_2", $single = true);
						$im3 = get_post_meta($post->ID, "work_image_3", $single = true);
						$im4 = get_post_meta($post->ID, "work_image_4", $single = true);
						$im5 = get_post_meta($post->ID, "work_image_5", $single = true);
						
						if($im1){ echo "<img src='$im1' alt='$title' class='$class' />"; }
						if($im2){ echo "<img src='$im2' alt='$title' class='$class' />"; }
						if($im3){ echo "<img src='$im3' alt='$title' class='$class' />"; }
						if($im4){ echo "<img src='$im4' alt='$title' class='$class' />"; }
						if($im5){ echo "<img src='$im5' alt='$title' class='$class' />"; }
						
					?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="grid_4 omega mbump" id="work_right">
			<div class="prInner">
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<h4><?php echo get_post_meta($post->ID, "work_desc", $single = true); ?></h4>
					<div class="work_conts"><?php the_content(); ?></div>
				<?php endwhile; endif; ?>
				<a class="btt" href="#wrapper">top &#8593;</a>
			</div>
		</div>		
	</div>
	
	
	<div class="welcome welcome_about">
		<?php $newTitle = 'work-single&piece=' . get_the_title($post->ID); ?>
		<h3>We craft custom-tailored websites, hand-stiched with precision. <a href="<?= contactLink($newTitle) ?>">Schedule a fitting...</a></h3>
	</div>
	
	

<?php get_footer(); ?>