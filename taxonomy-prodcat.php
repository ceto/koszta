<?php
/**
 * The template for displaying Product Category Archive pages.
 *
 Template Name: Reference List Tax
 */
?>
<div id="fullcs" class="clearfix">
<?php $aktcat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<nav class="nav-prodcat">
  <h1 class="reflist-title">
    <?php _e('Bőrdíszműves munkák','root'); ?>
  </h1>
  <?php   
    $args = array( 
      'taxonomy' => 'prodcat'
    );
    $terms = get_terms('prodcat', $args);
  ?>
  <ul class="prodcat-menu">
    <li>
      <a class="<?php echo $aktcat->slug==''?'active':''; ?>" href="?page_id=13" title="Teljes portfolió">
        Mutasd mindet
      </a>
    </li>
    <?php foreach ($terms as $term) { ?>
      <li>
      <a class="<?php echo $term->slug==$aktcat->slug?'active':''; ?>" data-catslug="<?php echo $term->slug; ?>" href="<?php echo get_term_link($term); ?>" title="<?php echo $term->name; ?>">
        <?php echo $term->name; ?>
      </a>
      </li>
    <?php } ?>
  </ul>
</nav>
<?php  
	$the_references =new WP_Query (
		array(
			'post_type' => 'reference',
			'posts_per_page' => -1,
      'prodcat' => $aktcat->slug
		)
	);
?>
<div class="reflist-wrap">
<ul class="reflist">
<?php while ($the_references->have_posts()) : $the_references->the_post(); ?>
  <?php 
    $termlist=get_the_terms( $post->ID, 'prodcat' );
    $termik = array();
    foreach ( $termlist as $term ) {
        $termik[] = $term->slug;
      }
    $termes = join(" ", $termik );
  ?>
  <li data-cat="<?php echo $termes; ?>" class="reflist-item <?php post_class($termes); ?>">
  	<a href="<?php the_permalink()?>" title="<?php the_title() ?>">
  		<?php if (has_post_thumbnail()) {the_post_thumbnail('tiny11');} else {?>
  			<img src="http://placehold.it/240x240/&text=Photo" alt="<?php the_title() ?>">
    	<?php } ?>
    	<h3><?php the_title() ?></h3>
    </a>
  </li>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
<script>
	// jQuery(document).ready(function() {
	// 	$('.prodcat-menu a').removeClass('active');
	// 	$('.prodcat-menu a[data-catslug="'+location.hash.substr(1)+'"]').addClass('active');
	// 	$('article:not(.'+location.hash.substr(1)+')').removeClass('mutat');

	// 	jQuery('.prodcat-menu a').click(function(e) {
	// 		e.preventDefault();
	// 		$('.prodcat-menu a').removeClass('active');
	// 		$(this).addClass('active');
	// 		$('article:not(.'+$(this).attr('data-cat')+')').removeClass('mutat');
	// 		$('article.'+$(this).attr('data-cat')).addClass('mutat');
	// 		location.hash=$(this).attr('data-cat');
	// 	});

	// });
</script>
</div><!-- /#fullcs -->

