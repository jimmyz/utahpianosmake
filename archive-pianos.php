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
      <th class="piano-cell">Photo</th>
      <th class="piano-cell">Brand</th>
      <th class="piano-cell">Price</th>
      <th class="piano-cell">Type</th>
      <th class="piano-cell">Finish</th>
      <th class="piano-cell">Year Made</th>
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
