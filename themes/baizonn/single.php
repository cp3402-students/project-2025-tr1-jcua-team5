<?php
get_header();
?>

<main id="primary" class="site-main">
  <?php
  while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content', get_post_type() );
    the_post_navigation();
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  endwhile;
  ?>
</main><!-- #primary -->

<?php
get_footer();
