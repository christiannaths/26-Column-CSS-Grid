<?php // Template Name: Home Page ?>

<?php get_header(); ?>

<div id="content" class="column span-24 prepend-1 append-1 last">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h2><?php the_title(); ?></h2>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    </div>
  <?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>