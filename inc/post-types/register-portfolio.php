<?php

$portfolio = new CPT(array(
    'post_type_name' => 'portfolio',
    'singular' => __('Portfolio', 'travelbootstrap'),
    'plural' => __('Portfolio', 'travelbootstrap'),
    'slug' => 'portfolio'
),
  array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-portfolio'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'portfolio_tags',
    'singular' => __('Portfolio Tag', 'travelbootstrap'),
    'plural' => __('Portfolio Tags', 'travelbootstrap'),
    'slug' => 'portfolio-tag'
));


