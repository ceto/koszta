<?php
/*
YARPP Template: Koszta Bottom Sidebar Widget
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3 class="widget-title"><?php _e('Nézd meg ezeket is','roots') ?></h3>
<?php if (have_posts()):?>
<ol>
	<?php while (have_posts()) : the_post(); ?>

		<li>
      <a href="<?php the_permalink() ?>" class="szaggat thumblink" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <?php if (has_post_thumbnail()) :?>        
          <?php the_post_thumbnail('tiny11'); ?>
        <?php else: ?>
          <img src="http://placehold.it/240x240/&text=Photo" alt="<?php the_title() ?>">
        <?php endif; ?>
      </a>
      <div class="rel-cont">
        <h3>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a>
        </h3>
        <?php the_excerpt(); ?>
      </div>
    </li>

	<?php endwhile; ?>
</ol>
<?php else: ?>
<p><?php _e('Nincs kapcsolódó tartalom','roots') ?></p>
<?php endif; ?>
