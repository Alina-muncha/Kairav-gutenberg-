<?php

add_action('acf/init', 'starterkit_init_block_types');
function starterkit_init_block_types()
{

	// Check function exists.
	if (function_exists('acf_register_block_type')) {

		// register a testimonial block.
		acf_register_block_type(array(
			'name'            => 'starter-kit-testimonial',
			'title'           => __('Testimonial'),
			'description'     => __('A custom testimonial block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'eb-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('testimonial', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-home-banner',
			'title'           => __('Home banner'),
			'description'     => __('A custom home banner block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('home banner', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-paragraph-with-centeralign',
			'title'           => __('Paragraph with center align'),
			'description'     => __('A custom Paragraph with center align block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('paragraph with center align', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  	=> 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-three-column-listing',
			'title'           => __('Three column listing'),
			'description'     => __('A custom three column listing block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Three column listing', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-certification-section',
			'title'           => __('Certification section'),
			'description'     => __('A custom certification-section block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Certification section', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-blog-listing',
			'title'           => __('Blog listing'),
			'description'     => __('A custom blog-listing block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Blog listing', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-default-banner',
			'title'           => __('Default Banner'),
			'description'     => __('A custom default-banner block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Default Banner', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-two-column-section',
			'title'           => __('Two column section'),
			'description'     => __('A custom two column section block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Two column section', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-faqs',
			'title'           => __('FAQs'),
			'description'     => __('A custom FAQs block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('FAQs', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-paragraph',
			'title'           => __('Paragraph'),
			'description'     => __('A custom Paragraph block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Paragraph', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));


		acf_register_block_type(array(
			'name'            => 'starter-kit-full-width-image',
			'title'           => __('Full width image'),
			'description'     => __('A custom full width image block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Full width image', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'            => 'starter-kit-title-with-description',
			'title'           => __('Title with description'),
			'description'     => __('A custom title with description block'),
			'render_callback' => 'starterkit_block_render_callback',
			'category'        => 'custom-blocks',
			'icon'            => 'admin-comments',
			'keywords'        => array('Title with description', 'quote'),
			'mode'            => 'edit',
			'supports'        => array(
				'mode'  => 'false',
				'align' => false,
			),
		));

		
	}
}