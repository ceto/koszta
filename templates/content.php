<article <?php post_class(); ?>>
  <figure class="entry-figure">
    <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" >
    <?php if (has_post_thumbnail()) {the_post_thumbnail('tiny11');} ?>
    </a>
  </figure>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
