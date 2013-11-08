<div class="refnyito"><a href="#">M</a></div>
<div class="chooser" id="chooser">
  <?php get_template_part('taxonomy-prodcat'); ?>
</div>




<?php // $akt_prodcat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <figure class="entry-figure circa">
      <a href="http://placehold.it/768x768/&text=Photo" title="<?php the_title() ?>" >
      <?php if (has_post_thumbnail()) {the_post_thumbnail('medium11');} else {?>
        <img src="http://placehold.it/768x768/&text=Photo" alt="<?php the_title() ?>">
      <?php } ?>
      </a>
    </figure>
    <header>
      <?php if ( function_exists('yoast_breadcrumb') ) : ?>
        <?php // yoast_breadcrumb('<p class="entry-bread">','</p>'); ?>
      <?php endif; ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>

    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <div class="action">
        <a href="#" class="btn">Ez kell</a>
      </div>
    </div>
    <?php get_template_part('templates/sharing'); ?>
    <footer class="aclearfix">
        <?php roots_content_nav('nav-reference'); ?>
    </footer>
  </article>

<?php endwhile; ?>