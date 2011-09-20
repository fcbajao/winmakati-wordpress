<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 960, 300, true );

function page_title() {
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'winmakati' ), max( $paged, $page ) );
}

function home_page_link_title() {
  echo esc_attr( get_bloginfo( 'name', 'display' ) );
}

function link_to_post_thumbnail() {
  if ( has_post_thumbnail() ) {
    ?>
    <a href="<?php the_permalink(); ?>" class="thumbnail-link-to-post" title="<?php the_title_attribute(); ?>" >
      <?php the_post_thumbnail('thumbnail'); ?>
    </a>
    <?php
  }
}

function entry_title_with_link() {
  ?>
	<h3 class="entry-title">
    <a
      href="<?php the_permalink(); ?>"
      title="<?php printf( esc_attr__( 'Permalink to %s', 'winmakati' ), the_title_attribute( 'echo=0' ) ); ?>"
      rel="bookmark">
      <?php the_title(); ?>
    </a>
  </h3>
  <?php
}

?>
