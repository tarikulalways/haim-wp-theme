<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_63b2f4bbbe5f1',
	'title' => 'counter',
	'fields' => array(
		array(
			'key' => 'field_63b2f4bc2e7fa',
			'label' => 'Counter Icon',
			'name' => 'counter_icon',
			'aria-label' => '',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_sets' => array(
				0 => 'all',
			),
			'custom_icon_set' => '',
			'default_label' => '',
			'default_value' => '',
			'save_format' => 'element',
			'allow_null' => 0,
			'show_preview' => 1,
			'enqueue_fa' => 0,
			'fa_live_preview' => '',
			'choices' => array(
			),
		),
		array(
			'key' => 'field_63b2f4e02e7fb',
			'label' => 'Conter Number',
			'name' => 'conter_number',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 62,
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b2f4f52e7fc',
			'label' => 'Title',
			'name' => 'title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Customers',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'counter',
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
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_63c2463e6f699',
	'title' => 'gallery',
	'fields' => array(
		array(
			'key' => 'field_63c246f43b1b9',
			'label' => 'Normal Image',
			'name' => 'normal_image',
			'aria-label' => '',
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
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_63c247003b1ba',
			'label' => 'Big Image',
			'name' => 'big_image',
			'aria-label' => '',
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
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'gallery',
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
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_63b191614bb49',
	'title' => 'halim slider',
	'fields' => array(
		array(
			'key' => 'field_63b1916215300',
			'label' => 'Sub Title',
			'name' => 'sub_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'We are halim',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b1919c15301',
			'label' => 'Button Text',
			'name' => 'button_text',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Read More',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b1969f15302',
			'label' => 'Button Link',
			'name' => 'button_link',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://www.google.com',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'slider',
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
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_63c231268a234',
	'title' => 'protfolio',
	'fields' => array(
		array(
			'key' => 'field_63c231272ff86',
			'label' => 'Designations',
			'name' => 'title',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63c2430450c0b',
			'label' => 'Technology Used',
			'name' => 'technology_used',
			'aria-label' => '',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Html5' => 'Html5',
				'Css3' => 'Css3',
				'Flexbox' => 'Flexbox',
				'Bootstrap' => 'Bootstrap',
				'JavaScript' => 'JavaScript',
				'Php' => 'Php',
				'MySql' => 'MySql',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'allow_custom' => 0,
			'layout' => 'vertical',
			'toggle' => 0,
			'save_custom' => 0,
		),
		array(
			'key' => 'field_63c2433050c0c',
			'label' => 'Project Features',
			'name' => 'project_features',
			'aria-label' => '',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Feature 1' => 'Feature 1',
				'Feature 2' => 'Feature 2',
				'Feature 3' => 'Feature 3',
				'Feature 4' => 'Feature 4',
				'Feature 5' => 'Feature 5',
				'Feature 6' => 'Feature 6',
				'Feature 7' => 'Feature 7',
				'Feature 8' => 'Feature 8',
				'Feature 9' => 'Feature 9',
				'Feature 10' => 'Feature 10',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'allow_custom' => 0,
			'layout' => 'vertical',
			'toggle' => 0,
			'save_custom' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'protfolio',
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
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_63b2ec3c73882',
	'title' => 'service area',
	'fields' => array(
		array(
			'key' => 'field_63b2ec3d4395e',
			'label' => 'Service Icon',
			'name' => 'service_icon',
			'aria-label' => '',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_sets' => array(
				0 => 'far',
			),
			'custom_icon_set' => '',
			'default_label' => '',
			'default_value' => '',
			'save_format' => 'element',
			'allow_null' => 0,
			'show_preview' => 1,
			'enqueue_fa' => 0,
			'fa_live_preview' => '',
			'choices' => array(
			),
		),
		array(
			'key' => 'field_63b2ef3f6caf1',
			'label' => 'Title',
			'name' => 'title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'WEB DESIGN',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b2ef5c6caf2',
			'label' => 'Description',
			'name' => 'description',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'services',
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
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_63b302e974450',
	'title' => 'team',
	'fields' => array(
		array(
			'key' => 'field_63b302ea34345',
			'label' => 'Title',
			'name' => 'title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'John Doe',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b3030a34346',
			'label' => 'Designation',
			'name' => 'designation',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Web Developer',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b303eb81701',
			'label' => 'Facebook Link',
			'name' => 'facebook_link',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://www.facebook.com',
			'placeholder' => '',
		),
		array(
			'key' => 'field_63b3047a81702',
			'label' => 'Twitter Link',
			'name' => 'twitter_link',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://www.twitter.com',
			'placeholder' => '',
		),
		array(
			'key' => 'field_63b3049181703',
			'label' => 'Instragram Link',
			'name' => 'instragram_link',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://www.instragram.com',
			'placeholder' => '',
		),
		array(
			'key' => 'field_63b304a981704',
			'label' => 'Google Plus link',
			'name' => 'google_plus_link',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://www.facebook.com',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'team',
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
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_63b3097d90b78',
	'title' => 'testimonial',
	'fields' => array(
		array(
			'key' => 'field_63b3097eb781a',
			'label' => 'Title',
			'name' => 'title',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b309a6b781b',
			'label' => 'Designation',
			'name' => 'designation',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_63b309afb781c',
			'label' => 'Descriptions',
			'name' => 'descriptions',
			'aria-label' => '',
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
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonial',
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
	'show_in_rest' => 0,
));

endif;		
?>