<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baizonn
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'baizonn' ) ); ?>">
      <?php
        printf( esc_html__( 'Proudly powered by %s', 'baizonn' ), 'WordPress' );
      ?>
    </a>
    <span class="sep"> | </span>
    <?php
      printf( esc_html__( 'Theme: %1$s by %2$s.', 'baizonn' ), 'baizonn', '<a href="http://underscores.me/">Underscores.me</a>' );
    ?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- Layout wrapper end -->
<?php wp_footer(); ?>
</body>
</html>
