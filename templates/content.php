<div class="article-wrap col-xs-12 col-sm-8 col-md-6 col-lg-4">
  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>">
      <article <?php post_class(); ?>>
          <div class="img-wrap">
            <?php get_template_part('templates/content', 'featured-image');?>
          </div>
          <header>
            <h2 class="entry-title"><?php the_title(); ?></h2>
          </header>
      </article>
    </a>
  </div>
</div>