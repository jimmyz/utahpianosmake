<?php
/**
 * @package Make
 */

$image_title = "Photo of ".get_the_title()." piano";
$image = types_render_field( "photo", array( "alt" => $image_title, "size" => "thumbnail" ) );
?>
<tr class="piano-row">
  <td class="piano-cell pg-image">
    <a href="<?php the_permalink(); ?>" rel="bookmark"><?= $image ?></a>
  </td>
  <td class="pg-cell pg-title">
  	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
  </td>
  <td class="pg-cell pg-price">$<?= types_render_field("price", array("style" => "FIELD_NAME : $ FIELD_VALUE")) ?></td>
  <td class="pg-cell pg-type">
    <?php
      foreach ( get_piano_types() as $term ) {
        echo $term->name; 
        // echo '<a href="' . get_term_link( $term->slug, 'piano-type' ) . '">' . $term->name . '</a>'; // echo the term
    	}
    ?>
  </td>
  <td class="pg-cell pg-finish">
    <?= types_render_field("wood-finish", array()) ?> 
  </td>
  <td class="pg-cell pg-age">
     <?= types_render_field("age", array("style" => "FIELD_NAME : $ FIELD_VALUE")) ?> years
  </td>
  
</tr>