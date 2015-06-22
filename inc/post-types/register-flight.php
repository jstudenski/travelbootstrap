<?php

$flight = new CPT(array(
    'post_type_name' => 'flight',
    'singular' => __('Flight', 'travelbootstrap'),
    'plural' => __('Flight', 'travelbootstrap'),
    'slug' => 'flight'
),
  array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-admin-site'
));

$flight->register_taxonomy(array(
    'taxonomy_name' => 'flight_tags',
    'singular' => __('Flight Tag', 'travelbootstrap'),
    'plural' => __('Flight Tags', 'travelbootstrap'),
    'slug' => 'flight-tag'
));


$flight->register_taxonomy(array(
    'taxonomy_name' => 'flight_origin',
    'singular' => __('Flight Origin', 'travelbootstrap'),
    'plural' => __('Flight Origin', 'travelbootstrap'),
    'slug' => 'flight-origin'
));