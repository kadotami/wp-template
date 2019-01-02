<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<!-- コンテンツ(記事、記事一覧) -->
<!-- 記事ループ スタート -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class(); ?>>
    <!-- 記事タイトル -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <!-- 記事情報（日付、カテゴリ、コメント） -->
    <time datetime="<?php echo get_the_date('Y/m/d') ?>">
        <?php echo get_the_date(); ?>
    </time>
    
    <?php the_category( ', ' ); ?>

    <!-- 記事本文 -->
    <?php the_content(); ?>

  </article>
<?php endwhile; endif; ?>
<!-- 記事ループ 終わり -->

<div class="navigation">
  <div class="prev"><?php previous_posts_link();?></div>
  <div class="next"><?php next_posts_link();?></div>
</div>
 