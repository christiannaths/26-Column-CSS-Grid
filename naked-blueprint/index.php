<?php
// Template Name: Blog Index

get_header(); ?>
<div id="content" class="column span-24 prepend-1 append-1 last">

  <?php
    $recentposts = get_posts('numberposts=5');
    foreach($recentposts as $post) :
    setup_postdata($post);
  ?>
    <div class="blog-post">
      <h2><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>
  <?php endforeach; ?>

  
</div><!-- #content -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
