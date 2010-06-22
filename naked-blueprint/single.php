<?php get_header(); ?>
<div id="content" class="blog-post column span-24 prepend-1 append-1 last">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

		</div>

<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your search terms.</p>

<?php endif; ?>
</div>
<?php get_footer(); ?>
