<?php get_header(); ?>

<?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>

<div id="left-col">
  <?php get_template_part( 'loop', 'recent' ); ?>
</div>

<?php get_footer(); ?>
