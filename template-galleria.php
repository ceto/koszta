<?php
/**
 * The Full Page Gallery template  file.
 *
 * Template Name: Full Page Gallery  
 */
?>
<div class="galleria-wrap">
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
      <div class="gitem">
        <?php the_post_thumbnail( 'greato'); ?>
        <h2><?php the_title(); ?></h2>
        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Pariatur, <?php the_title(); ?>
          <a href="#">esse maxime quam consectetur</a> labore omnis culpa
            et dolor vel mollitia rerum officiis id nam dolorum.
            <?php //the_content(); ?>
        </p>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/galleria-1.3.3.min.js"></script>
<script>
  jQuery(document).ready(function() {
    if (typeof Galleria!=='undefined') {
      Galleria.loadTheme('<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/galleria-themes/classic/galleria.classic.min.js');
      Galleria.run('#galleria',{
        dataConfig: function(img) {
          return {
            title: $(img).next('h2').html(), // tell Galleria to use the h2 as title
            description: $(img).siblings('.desc').html() // tell Galleria to grab the content from the .desc div as caption
          };
        },
        transition: 'fade',
        imageCrop: true,
        autoplay: 3000,
        showInfo: true,
      });
      Galleria.ready(function() {
        var gallery = this;
        $('<a>', {
            href: '#',
            class:'fullbtn',
            click:function(e) {
                e.preventDefault();
                gallery.enterFullscreen();
            }
        }).append('<span class="entypo resize-full"></span>' ).appendTo('#galleria');

      });
    };
  });
  $('.galleria').css('height',function() {
    return ( $(window).width()>=768 )?($(window).height()-154):$(window).height()-100;
  });
</script>