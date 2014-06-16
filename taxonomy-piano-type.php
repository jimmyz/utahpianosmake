<?php
/**
 * @package Make
 */

get_header();
$category_description = category_description();

?>

<?php ttfmake_maybe_show_sidebar( 'left' ); ?>

<main id="site-main" class="site-main" role="main">
  <h2>Pianos For Sale: <?php single_cat_title(); ?></h2>
  <?php if ($category_description) : ?>
  <p><?php echo category_description(); ?></p>
  <?php endif; ?>
  
  <?php if ( have_posts() ) : ?>
    <table class="piano-list">
      <tr>
        <th>Photo</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Type</th>
        <th>Finish</th>
        <th>Age</th>
      </tr>
  	<?php while ( have_posts() ) : the_post(); ?>
  		<?php get_template_part( 'partials/content', 'archive-piano' ); ?>
  	<?php endwhile; ?>
    </table>

  	<?php get_template_part( 'partials/nav', 'paging' ); ?>

  <?php else : ?>
  	<h3>Out of Stock</h3>
    <p>We're sorry, we currently have no <?php single_cat_title(); ?> pianos in stock. Please check back soon.</p>
  <?php endif; ?>
</main>

<?php ttfmake_maybe_show_sidebar( 'right' ); ?>

<?php get_footer(); ?>
