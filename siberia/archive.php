<?php get_header(); ?>
<div class="grid_18 alpha omega" id="blogPage">
	<div class="grid_14 alpha">
		<?php if (have_posts()) : ?>
				<?php 
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
					echo '<h1 class="pageType">';
					if (is_category()) {
						echo "Category: ";
						single_cat_title();					
					} elseif (is_tag()) {
						echo "Tag: ";
						single_cat_title();
					} elseif (is_month()) { 
						echo the_time('F, Y');		
					} elseif (is_year()) { 
						echo the_time('Y');
					} elseif (is_author()) { 
						echo 'Articles by ';
						echo $curauth->nickname;					
					} else { 
						echo 'Blog Archives';
					} 
					echo '</h1>';
				?>
				
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
			
			
			<div class="pageNums"><?php pagenav(); ?></div>	
			
		<?php else : ?>
		
			<h1 class="pageType">Archive Not Found</h1>
			<div class="pContents">This Archive Was Not Found, please try something else. Thank You!</div>
			
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

