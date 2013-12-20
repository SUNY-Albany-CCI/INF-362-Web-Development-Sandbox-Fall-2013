<?php 

add_action('after_setup_theme', 'setup_post_types_cars');

function setup_post_types_cars() {
    $cars = new Super_Custom_Post_Type(('cars'),
    'Car',
    'Cars',
    array(
        'comments' => 'true',
        'capability_type' => 'page',
        'has_archive'=> true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'comments',
            'excerpt',
            'page-attributes',
	        )));
    $cars->set_icon('road');

     $tax_cats = new Super_Custom_Taxonomy('car_category', 'Category', 'Categories', 'category');
    $tax_tags = new Super_Custom_Taxonomy('car_tag', 'Tag', 'Tags');

    connect_types_and_taxes($cars,  array($tax_tags, $tax_cats ));

}



?>