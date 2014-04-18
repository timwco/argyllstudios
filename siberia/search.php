<?php get_header(); ?>
<div class="grid_18 alpha omega" id="blogPage">
	<div class="grid_14 alpha">
		<?php if (have_posts()) : ?>
			<h1 class="pageType">Search Results: <?php echo $_GET['s']; ?></h1>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="nav grid_18 alpha omega">
						<div class="authorBlock grid_2 alpha"><span class="author">by: <?php the_author_posts_link(); ?></span></div>
						<div class="categoryBlock grid_14"><?php the_category(', ') ?></div>
						<div class="dateBlock grid_2 omega"><div class="datepos"><?php the_time('m.d.y') ?></div></div>
					</div>
					<div class="pContents"><?php the_content('Read More'); ?></div>
					<div class="sepborder"></div>
				</div>
			<?php endwhile; ?>
		<div class="pageNums"><?php pagenav(); ?></div>	
		<?php else : ?>
			<h1 class="pageType">Search Results: </h1>
			<div class="pContents">Sorry, no results found. Please try something else or contact us for help.</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>