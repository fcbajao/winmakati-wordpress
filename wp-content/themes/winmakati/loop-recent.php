<div id="recent-posts">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>    

    <?php $post_class = has_post_thumbnail() ? 'with-thumbnail' : ''; ?>
    <div class="post <?php echo $post_class; ?>">
      <?php link_to_post_thumbnail(); ?>
      <div class="content">
        <?php entry_title_with_link(); ?>
        <div class="excerpt">
          <?php the_excerpt(); ?>
        </div><!-- .excerpt -->
      </div><!-- .content -->
    </div><!-- .post -->

  <?php endwhile; ?>
<?php endif; ?>
</div><!-- #recent-posts -->
