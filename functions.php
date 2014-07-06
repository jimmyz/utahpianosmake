<?php

function get_piano_types()
{
  $term_list = get_the_terms( $post->ID, 'piano-type' );
  if ( count($term_list) > 0 ) {
    return $term_list;
  } else {
    return array();
  }
}

/*
 * returns 1 if sold, 0 if not sold
 */
function is_sold()
{
  return types_render_field("sold", array("output" => "raw"));
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function piano_widget_init() {

	register_sidebar( array(
		'name' => 'Piano Page Widget',
		'id' => 'piano_widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'piano_widget_init' );

?>