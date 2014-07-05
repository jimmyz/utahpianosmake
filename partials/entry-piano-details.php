<?php

$image_title = "Photo of ".get_the_title()." piano";
$image = types_render_field( "photo", array( "alt" => $image_title, "size" => "large" ) )
  
?>
  
    
<section id="piano-details" class="builder-section builder-section-first builder-section-text builder-section-last builder-text-columns-2">
	<div class="builder-section-content">
	  <div class="builder-text-column">
      <!-- <h3 class="builder-text-title">Piano Details</h3> -->
			<div class="builder-text-content">
        <?php if (is_sold()) : ?>
        <div class="piano-detail">
          <p>We're sorry, this piano has been sold and is unavailable.</p>
        </div>
        <?php endif; ?>
        <div class="piano-detail">
          <strong>Price</strong>: $<?= number_format(types_render_field("price", array("style" => "FIELD_NAME : $ FIELD_VALUE"))) ?> 
        </div>
        <div class="piano-detail">
          <strong>Piano Type</strong>: 
          <?php
            foreach ( get_piano_types() as $term ) {
              echo '<a href="' . get_term_link( $term->slug, 'piano-type' ) . '">' . $term->name . '</a>'; // echo the term
          	}
          ?>
        </div>
        <div class="piano-detail">
          <strong>Finish</strong>: <?= types_render_field("wood-finish", array()) ?> 
        </div>
        <div class="piano-detail">
          <strong>Year Made</strong>: <?= types_render_field("age", array("style" => "FIELD_NAME : $ FIELD_VALUE")) ?>
        </div>
        <p><?php the_content(); ?></p>
      </div>
    </div>
		<div class="builder-text-column">
      <!-- <h3 class="builder-text-title">Photos</h3> -->
			<div class="builder-text-content">
		    <?= $image ?>
      </div>
		</div>
	</div>
</section>
