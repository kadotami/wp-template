<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class(); ?>>
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <time datetime="<?php echo get_the_date('Y/m/d') ?>">
        <?php echo get_the_date(); ?>
    </time>
    
    <?php the_category( ', ' ); ?>

    <?php the_content(); ?>

  </article>
<?php endwhile; endif; ?>

<div class="navigation">
  <div class="prev"><?php previous_posts_link();?></div>
  <div class="next"><?php next_posts_link();?></div>
</div>
 
<?php get_footer(); ?>