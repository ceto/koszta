<div class="refnyito"><a data-toggle="collapse" data-target="#chooser" title="Összes mutatása"><span class="picto"></span> Mutasd mindet</a></div>
<div class="chooser collapse" id="chooser">
  <?php get_template_part('taxonomy-prodcat'); ?>
</div>




<?php // $akt_prodcat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <figure class="entry-figure circa">
      <?php
        $orig_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'great11');
      ?>
      <a href="<?php echo $orig_image[0]; ?>" class="popup" title="<?php the_title() ?>" >
      <?php if (has_post_thumbnail()) {the_post_thumbnail('great11');} else {?>
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
        <a href="?page_id=11&ap_id=<?php echo get_the_ID(); ?>" title="Ajánlat kérése" class="btn"><small>Árajánlatot kérek</small></a>
 
    </div>
    


    <footer class="clearfix">
        <?php roots_content_nav('nav-reference'); ?>
    </footer>

  </article>
<?php endwhile; ?>

