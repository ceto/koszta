<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <figure class="entry-figure">
      <img src="http://lorempixel.com/768/768" alt="<?php the_title(); ?>" />
    </figure>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
