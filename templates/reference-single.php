<div class="refnyito"><a href="#" title="Összes mutatása"><span class="picto">⚏</span></a></div>
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
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <div class="entry-discl">
        <h3>Ha rendelni szeretnél</h3>
        <p>Minden munka egyedileg készül, melyet részletes egyeztetés előz meg.
          Vedd fel velem a kapcsolatot.
          Vagy kérdezz, kommentálj itt a termékoldalon</p>
        <p>Tel: <strong>+36 70 7705653</strong> | E-mail: <strong><a href="mailto:zoli@koszta.hu">zoli@koszta.hu</a></strong></p>
    </div>
          


    <footer class="clearfix">
        <?php roots_content_nav('nav-reference'); ?>
    </footer>

  </article>
<?php endwhile; ?>

