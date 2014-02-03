<?php global $actualurl; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php $actualurl=get_permalink(); ?>
    <?php $full_bg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'great11'); ?>
    <figure class="entry-figure full-bg" style="background-image:url(<?php echo $full_bg[0]; ?>)">
      <?php
        $orig_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'great11');
      ?>
      <a href="<?php echo $orig_image[0]; ?>" class="popup" title="<?php the_title() ?>" >
      <?php if (has_post_thumbnail()) {the_post_thumbnail('great11');} ?>
      </a>
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
