<?php

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
    
     //Footer area option
        $wp_customize->add_section('nasir_footer_option',array(
            'title'=>__('Footer option','nasiruddin'),
            'description'=>'If you interested to change or update your footer settings you can do it.'
        ));
    
        $wp_customize->add_setting('nasir_copyright_section',array(
            'default'=>'&copy; Copyright 2022 | Nasir 369',
        ));
    
        $wp_customize->add_control('nasir_copyright_section',array(
            'label'=>'Copyright Text',
            'description'=>'If need you can update your copyright text from here',
            'setting'=>'nasir_copyright_section',
            'section'=>'nasir_footer_option',
        ));
// Theme Color
  $wp_customize-> add_section('nasir_colors', array(
    'title' => __('Theme Color', 'nasiruddin'),
    'description' => 'If need you can change your theme color.',
  ));

  $wp_customize ->add_setting('nasir_bg_color', array(
    'default' => '#ffffff',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'nasir_bg_color', array(
    'label' => 'Background Color',
    'section' => 'nasir_colors',
    'settings' => 'nasir_bg_color',
  )));
  $wp_customize ->add_setting('nasir_primary_color', array(
    'default' => '#ea1a70',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'nasir_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'nasir_colors',
    'settings' => 'nasir_primary_color',
  )));

    
    }
    
    add_action('customize_register','nasir_customizar_register');
  
    function nasir_theme_color_cus(){
        ?>
        <style>
          body{background: <?php echo get_theme_mod('nasir_bg_color'); ?>}
          :root{ --pink:<?php echo get_theme_mod('nasir_primary_color'); ?>}
        </style>
        <?php 
      }
      add_action('wp_head', 'nasir_theme_color_cus');