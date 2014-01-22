<?php
/**
 * Custom functions
 */

/************** REFERENCES *************/
add_action( 'init', 'create_reference_type' );
function create_reference_type() {
	register_post_type( 'reference',
		array(
			'labels' => array(
				'name' => __( 'Leatherworks','root' ),
				'singular_name' => __( 'leatherwork','root' ),
				'add_new_item'  => __( 'Add New Leatherwork','root' ),
				'edit_item'		=> __( 'Edit Leatherwork','root' ),
				'all_items'		=> __( 'All Leatherworks','root' ) 
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'bordiszmuvek'),
			'supports' => array('title', 'editor', 'thumbnail'),
      'yarpp_support' => true
		)
	);
}
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
function cmb_initialize_cmb_meta_boxes() { if ( ! class_exists( 'cmb_Meta_Box' ) )	require_once 'cmb/init.php';}


/********** Leatherworks category taxonomy ************* */

add_action( 'init', 'create_prodcat_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_prodcat_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Product categories', 'taxonomy general name','root' ),
		'singular_name'     => _x( 'Product category', 'taxonomy singular name','root' ),
		'search_items'      => __( 'Search Product Categories','root' ),
		'all_items'         => __( 'All Categories','root' ),
		'parent_item'       => __( 'Parent Category','root' ),
		'parent_item_colon' => __( 'Parent Category:','root' ),
		'edit_item'         => __( 'Edit Category','root' ),
		'update_item'       => __( 'Update Category','root' ),
		'add_new_item'      => __( 'Add New Product Category','root' ),
		'new_item_name'     => __( 'New Product Category Name','root' ),
		'menu_name'         => __( 'Product Category','root' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'product-category' ),
	);

	register_taxonomy( 'prodcat', array( 'reference' ), $args );
}


/************ Fullscreen Inspirational Gallery **********/
function create_fullscreen_gallery() {
  $labels = array(
    'name' => __( 'Gallery Photo', 'root' ),
    'singular_name' => __( 'Gallery Photo', 'root' ),
    'add_new' => __( 'Add New Photo', 'root' ),
    'add_new_item' => __( 'Add New Photo', 'root' ),
    'edit_item' => __( 'Edit Photo', 'root' ),
    'new_item' => __( 'New Photo', 'root' ),
    'all_items' => __( 'All Photos', 'root' ),
    'view_item' => __( 'View Photo', 'root' ),
    'search_items' => __( 'Search Photos', 'root' ),
    'menu_name' => __( 'Fullscreen Gallery', 'root' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'galleryphoto' ),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 

  register_post_type( 'galleryphoto', $args );
}
add_action( 'init', 'create_fullscreen_gallery' ); 


















if ( ! function_exists( 'roots_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
*/
function roots_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-paging';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?> clearfix">
	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '%link', _x( '', 'Previous post link', 'ligeti' ) . '<span class="entypo triangle-left"></span> %title' ); ?>
		<?php next_post_link( '%link', '%title <span class="entypo triangle-right"></span>' . _x( '', 'Next post link', 'ligeti' )  ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="previous"><?php next_posts_link( __( '<i class="icon-double-angle-left"></i> Older posts', 'ligeti' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="next"><?php previous_posts_link( __( 'Newer posts <i class="icon-double-angle-right"></i>', 'ligeti' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // roots_content_nav