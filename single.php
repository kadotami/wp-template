<?php get_header(); ?>

<div id="container">
  <div class="content">
    <?php if(have_posts()) :
          while(have_posts()) :
            the_post(); ?>

      <div class="single-post">
        <div class="post-header">
          <h2><?php the_title(); ?></h2>
          <div class="post-date">
            <?php the_author(); ?>
            <?php echo get_the_date('Y/n/j'); ?>
          </div>
          <div class="clear-both"></div>
        </div>
        <div class="post-contents">
            <?php the_content(); ?>
        </div>
      </div>

      <div class="navigation">
        <div class="prev"><?php previous_post_link();?></div>
        <div class="next"><?php next_post_link();?></div>
        <div class="clear-both"></div>
      </div>

      <?php endwhile;
        else: ?>

      <p>投稿が存在しません</p>

      <?php endif; ?>

  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>