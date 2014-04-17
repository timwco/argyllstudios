<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page">
			<h2 class="pageTitle"><?php the_title(); ?></h2>
			<div class="pContents"><?php the_content(); ?></div>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>