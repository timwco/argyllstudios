<?php get_header(); ?>
<div class="omni" id="blogPage">
	<div class="grid_14 alpha">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post">
				<h2 class="postTitle"><?php the_title(); ?></h2>
				<div class="nav grid_18 alpha omega">
					<div class="authorBlock sgrid_2 alpha"><span class="author">by: <?php the_author_posts_link(); ?></span></div>
					<div class="categoryBlock sgrid_14"><?php the_category(', ') ?></div>
					<div class="dateBlock sgrid_2 omega"><div class="datepos"><?php the_time('m.d.y') ?></div></div>
				</div>
				<div class="pContents"><?php the_content(); ?></div>
			</div>
			
			<?php comments_template(); ?>		
					
		<?php endwhile; else: ?>
			<div class="pContents">Sorry, no posts matched your criteria.</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>