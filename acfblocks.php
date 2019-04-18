<?php
/**
 * Plugin Name: ACF Blocks
 * Plugin URI:  https://acfblocks.com/
 * Description: Suite of customisable Gutenberg blocks using ACF.
 * Version:     0.1
 * Author:      munirkamal
 * Author URI:  https://munirkamal.wordpress.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: acfb
 * Domain Path: /languages
 */


add_action('acf/init', 'gutenberg_acf_blocks_fields');

function gutenberg_acf_blocks_fields() {
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5cb6d34c13dd9',
		'title' => 'Testimonial Block',
		'fields' => array(
			array(
				'key' => 'field_5cb6d3546c42e',
				'label' => 'Avatar',
				'name' => 'avatar',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5cb6d3a16c430',
				'label' => 'Testimonial',
				'name' => 'testimonial',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_5cb6d3d56c431',
				'label' => 'Author',
				'name' => 'author',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/testimonial',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;
}


add_action('acf/init', 'gutenberg_acf_blocks');
function gutenberg_acf_blocks() {

    // check function exists.
    if( function_exists('acf_register_block') ) {

        // register a testimonial block.
        acf_register_block(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'block-templates/testimonial.php',
            'category'          => 'formatting',
        ));
    }
}