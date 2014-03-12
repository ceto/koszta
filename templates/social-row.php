<?php global $actualurl; ?>
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
    <div class="fb-like" data-href="<?php echo $actualurl; ?>" colorscheme="dark" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    <div class="fb-comments clearfix" data-href="<?php echo $actualurl; ?>" data-colorscheme="dark" data-numposts="5"></div>
    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Koszta-B%C5%91rm%C5%B1ves-m%C5%B1hely-B%C5%91rp%C3%A1nc%C3%A9lok-%C3%A9s-Lovas%C3%ADj%C3%A1sz-felszerel%C3%A9sek/685251628157579" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
  </section>

</aside>
