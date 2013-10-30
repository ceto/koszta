<div class="refnyito"><a href="#">M</a></div>
<div class="chooser" id="chooser">
  <?php get_template_part('taxonomy-prodcat'); ?>
</div>




<?php // $akt_prodcat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <figure class="entry-figure">
      <?php if (has_post_thumbnail()) {the_post_thumbnail('medium11');} else {?>
        <img src="http://placehold.it/768x768/&text=Photo" alt="<?php the_title() ?>">
      <?php } ?>
    </figure>
    <header>
      <nav class="nav-tab clearfix">
        <ul>
          <li><a href="#">Adatlap</a></li>
          <li><a href="#">Szólj hozzá</a></li>
          <li><a href="#">Vélemény</a></li>
          <li><a href="#">Vásárlás</a></li>
        </ul>
      </nav>
      <?php if ( function_exists('yoast_breadcrumb') ) : ?>
        <?php yoast_breadcrumb('<p class="entry-bread">','</p>'); ?>
      <?php endif; ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>

    </header>
    <div class="entry-content">

      <?php the_content(); ?>
    </div>
    <div class="entry-thumbs">
      <ul>
        <li><a href="#"><img src="http://lorempixel.com/320/240" alt=""></a></li>
        <li><a href="#"><img src="http://lorempixel.com/320/240" alt=""></a></li>
        <li><a href="#"><img src="http://lorempixel.com/320/240" alt=""></a></li>
        <li><a href="#"><img src="http://lorempixel.com/320/240" alt=""></a></li>

      </ul>
    </div>
    <footer>
        <?php roots_content_nav('nav-reference'); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>

<?php endwhile; ?>