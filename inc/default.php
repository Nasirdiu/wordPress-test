<?php

/*Function a amara php ses ?> ses korbo na*/

//Theme Title 

add_theme_support('title-tag');

//thumbnil  image area

add_theme_support( 'post-thumbnails', array('page','post') );

add_image_size('post-thumbnails', 970, 350, true);


// Except to 40 Word versition update er jono error

/*
function nasir_excerpt_more($more){
    return '<a href="'.get_permalink( $post->ID) . '">' . 'Read More' . '</a>';

}
add_filter('excerpt_more','nasir_excerpt_more');

function nasir_excerpt_lenght($length){
     return 40;
  }
  add_filter('excerpt_length', 'nasir_excerpt_lenght', 999);

*/
