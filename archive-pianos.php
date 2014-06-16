<?php
/**
 * @package Make
 */

get_header();
?>

<?php ttfmake_maybe_show_sidebar( 'left' ); ?>

<main id="site-main" class="site-main" role="main">
  <h2>Pianos for Sale</h2>
  <table class="piano-list">
    <tr>
      <th>Photo</th>
      <th>Brand</th>
      <th>Price</th>
      <th>Type</th>
      <th>Finish</th>
      <th>Age</th>
    </tr>
  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : the_post(); ?>
  		<?php get_template_part( 'partials/content', 'archive-piano' ); ?>
  	<?php endwhile; ?>

  	<?php get_template_part( 'partials/nav', 'paging' ); ?>

  <?php else : ?>
  	<?php get_template_part( 'partials/content', 'none' ); ?>
  <?php endif; ?>
  </table>
</main>

<?php ttfmake_maybe_show_sidebar( 'right' ); ?>

<?php get_footer(); ?>
