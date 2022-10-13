<?php

/*
*My Theme Function
*/

//Theme Title 

add_theme_support('title-tag');

//Theme css and jquery file calling ba adding 

function nasir_css_js_file_calling(){

wp_enqueue_style( 'nasir_style',get_stylesheet_uri() );

wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2','all');

 wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0','all');

 wp_enqueue_style('bootstrap');
 wp_enqueue_style('custom');


    //jquery
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean ); 

    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2','true');

    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0','true');


}
add_action('wp_enqueue_scripts','nasir_css_js_file_calling');


//google fonts enqueue

function nasir_add_google_fonts(){
    wp_enqueue_style('nasir_add_google_fonts','https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts','nasir_add_google_fonts');




//Theme function logo jono

function nasir_customizar_register($wp_customize){

//header area adding 

    $wp_customize->add_section('nasir_header_area',array(
        'title'=>__('Header Area','nasiruddin'),
        'description'=>'If You interested to your update header area,you can do it here'
    ));

    $wp_customize->add_setting('nasir_logo',array(
        'default'=>get_bloginfo('template_directory') .'/img/logo.jpg',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nasir_logo',array(
        'label'=>'Logo Upload',
        'description'=>'If You interested to change or update your logo you can do it here',
        'setting'=>'nasir_logo',
        'section'=>'nasir_header_area',
    )));

    //menu position option
    $wp_customize->add_section('nasir_menu_option',array(
        'title'=>__('Menu Position Option','nasiruddin'),
        'description'=>'If You interested to your update Menu Position ,you can do it here?'
    ));

    $wp_customize->add_setting('nasir_menu_position',array(
        'default'=>'right_menu',
    ));

    $wp_customize->add_control('nasir_menu_position',array(
        'label'=>'menu_position',
        'description'=>'selected  your menu position.',
        'setting'=>'nasir_menu_position',
        'section'=>'nasir_menu_option',
        'type'=>'radio',
        'choices'=>array(
            'left_menu'=>'Left Menu',
            'right'=>'Right Menu',
            'center_menu'=>'center Menu'
        ),
        

    ));


}

add_action('customize_register','nasir_customizar_register');

//Menu Register

register_nav_menu( 'main_menu','Main Menu','nasiruddin');