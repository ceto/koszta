<aside class="social-wrap clearfix">
  <a name="social" id="social"></a>
  <section class="social-command clearfix">
    <div class="balfel">
      <?php get_template_part('templates/sharing'); ?>
    </div>
    
    <div class="jobbfel">
      <h3 class="fbopener">
        <a class="comment-nyito" data-toggle="collapse" data-target="#responds">Kérdezz, szólj hozzá <span class="ion-chevron-down"></span></a>
      </h3>   
    </div>
  </section>

  <section id="responds" class="entry-comments clearfix collapse">
    <div class="fb-comments clearfix" data-href="<?php the_permalink(); ?>" data-colorscheme="dark" data-numposts="5"></div>
  </section>

</aside>
