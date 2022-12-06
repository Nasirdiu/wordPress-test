<?php

function custom_slider(){
    register_post_type('slider',
    array(
        'labels'=>array(
        'name'=>('slider'),
        'singular_name' => ('slider'),
        'add_new' => ('Add New slider'),
        'add_new_item' => ('Add New slider'),
        'edit_item' => ('Edit slider'),
        'new_item' => ('New slider'),
        'view_item' => ('View slider'),
        'not_found' => ('Sorry, we cound\'n find the slider you are looking for.'),
        ),

        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        
        'rewrite' => array('slag' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )
    );

    add_theme_support('post-thumbnails');
}
add_action('init', 'custom_slider');


function custom_service(){
    register_post_type('service',
    array(
        'labels'=>array(
        'name'=>('Services'),
        'singular_name' => ('Service'),
        'add_new' => ('Add New Service'),
        'add_new_item' => ('Add New Service'),
        'edit_item' => ('Edit Service'),
        'new_item' => ('New Service'),
        'view_item' => ('View Service'),
        'not_found' => ('Sorry, we cound\'n find the service you are looking for.'),
        ),

        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array ('category'),
        'rewrite' => array('slag' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )
    );

    add_theme_support('post-thumbnails');
}
add_action('init', 'custom_service');

function custom_project(){
    register_post_type('project',
    array(
        'labels'=>array(
        'name'=>('projects'),
        'singular_name' => ('project'),
        'add_new' => ('Add New project'),
        'add_new_item' => ('Add New project'),
        'edit_item' => ('Edit project'),
        'new_item' => ('New project'),
        'view_item' => ('View project'),
        'not_found' => ('Sorry, we cound\'n find the project you are looking for.'),
        ),

        'menu_icon' => 'dashicons-calendar',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array ('category'),
        'rewrite' => array('slag' => 'project'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )
    );

    add_theme_support('post-thumbnails');
}
add_action('init', 'custom_project');



//service category post show function 

function query_post_type($query){
    if(is_category() ){
      $post_type = get_query_var('post_type');
      if($post_type){
        $post_type = $post_type;
      } else {
        $post_type = array ('post', 'service');
        $query -> set('post_type', $post_type);
        return $query;
      }
    }
  }
  add_filter('pre_get_posts', 'query_post_type');