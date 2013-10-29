<?php
/*
Template Name: Reference List
*/
?>

<nav class="nav-prodcat">
  <h1 class="reflist-title">
    <?php echo roots_title(); ?>
  </h1>
  <?php   
    $args = array( 
      'taxonomy' => 'prodcat'
    );
    $terms = get_terms('prodcat', $args);
  ?>
  <ul>
    <li>
      <a href="#" title="">
        Mutasd mindet
      </a>
    </li>
    <?php foreach ($terms as $term) { ?>
      <li>
      <a data-catslug="<?php echo $term->slug; ?>" href="<?php echo get_term_link($term); ?>" title="<?php echo $term->name; ?>">
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
			'posts_per_page' => -1
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
</ul>
</div>
