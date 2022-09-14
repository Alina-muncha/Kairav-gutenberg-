<?php
function starter_kit_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'eb-blocks',
				'title' => __( 'EB Blocks', 'eb-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'starter_kit_block_category', 10, 2);