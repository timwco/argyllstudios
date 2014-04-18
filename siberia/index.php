<?php get_header(); ?>
<div class="omni" id="blogPage">
	<div class="grid_14 alpha">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="nav grid_18 alpha omega">
						<div class="authorBlock sgrid_2 alpha"><span class="author">by: <?php the_author_posts_link(); ?></span></div>
						<div class="categoryBlock sgrid_14"><?php the_category(', ') ?></div>
						<div class="dateBlock sgrid_2 omega"><div class="datepos"><?php the_time('m.d.y') ?></div></div>
					</div>
					<div class="pContents"><?php the_content('Read More'); ?></div>
					<div class="sepborder"></div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<div class="pageNums"><?php pagenav(); ?></div>
		
	</div>
	<?php get_sidebar(); ?>
	<div class="welcome welcome_about">
		<h3>We craft custom-tailored websites, hand-stiched with precision. <a href="<?= contactLink('blog_main_footer') ?>">Schedule a fitting...</a></h3>
	</div>
</div>
<?php get_footer(); ?>