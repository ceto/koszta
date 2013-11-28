<?php
/**
 * The Full Page Gallery template  file.
 *
 * Template Name: Full Page Gallery  
 */
?>
<div class="gallerywrap" class="gallerywrap">
  <div id="galleria" class="galleria">
    <?php 
      $the_slides = new WP_Query( array (
        'post_type' =>  array('galleryphoto'),
        'orderby' => 'title',
        'order' => 'ASC'
      )
      );
    ?>
    <?php while ($the_slides->have_posts()) : $the_slides->the_post();  ?>
      <?php the_post_thumbnail( 'fullhd'); ?>
    <?php endwhile; ?>
  </div>
</div>