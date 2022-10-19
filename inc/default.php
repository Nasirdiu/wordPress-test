<?php

/*Function a amara php ses ?> ses korbo na*/

//Theme Title 

add_theme_support('title-tag');

//thumbnil  image area

add_theme_support( 'post-thumbnails', array('page','post','service') );

// add_image_size('service', 400, 200, true);
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

//pagenav function

function nasir_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages ='';
    $max=$wp_query->max_num_pages;
    if(!$current=get_query_var('paged'))$current=1;
    $args['base']=str_replace(999999999,'%#%',get_pagenum_link(999999999));
    $args['total']=$max;
    $args['current']=$current;
    $total=1;
    $args['prev_text']='Prev';
    $args['next_text']='Next';
    if($max>1)echo'</pre>
    <div class="wp_pagenav">';
    if($total==1 && $max > 1)$pages ='<p class="pages"page'.$current.'<span>of</span>'.$max.'</p>';
    echo $pages.paginate_links($args);
    if($max > 1) echo'</div><pre>';
}
