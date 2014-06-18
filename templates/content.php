<div class="article-wrap col-xs-12 col-sm-8 col-md-6 col-lg-4">
  <div class="thumbnail">
    <article <?php post_class(); ?>>
    <?php get_template_part('templates/content', 'featured-image');?>
        <header>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
    </article>
  </div>
</div>