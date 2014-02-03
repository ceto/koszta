<?php global $actualurl; ?>
<div class="chooser acollapse zoom-anim-dialog mfp-hide szaggat" id="chooser">
  <?php get_template_part('taxonomy-prodcat'); ?>
</div>
<?php // $akt_prodcat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php $actualurl=get_permalink(); ?>
    <?php $full_bg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'great11'); ?>
    <figure class="entry-figure full-bg" style="background-image:url(<?php echo $full_bg[0]; ?>)">
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
      <div class="refnyito">
  <a class="popup-with-zoom-anim" href="#chooser" data-target="#chooser" title="Összes mutatása">
    <span class="ion-grid"></span></a>
</div>
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
        
        <a href="#respond" data-subject="<?php echo get_the_title(); ?>" class="btn buy popup-with-form"><span class="ion-paper-airplane"></span> Ajánlatot kérek</a>

    </div>
    <?php get_template_part('templates/contact','form' ); ?>
    <footer class="clearfix">
        <?php roots_content_nav('nav-reference'); ?>
    </footer>

  </article>
<?php endwhile; ?>


