<?php

//side bar reg function

function nasir_widgets_register(){
    
    register_sidebar(array(
    'name'=>__('Main widget area','nasiruddin'),
    'id' => 'slider-1',
    'description'=>__('Appeas in the sidebar in blog page and also other page','nasiruddin'),
    'before_widget'=>'<div class="child_sidebar">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="title"',
    'after_title'=>'</h2>',

    ));
    register_sidebar(array(
    'name'=>__('Footer 1','nasiruddin'),
    'id' => 'footer-1',
    'description'=>__('Appeas in the sidebar in blog page and also other page','nasiruddin'),
    'before_widget'=>'<div class="child_sidebar">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="title"',
    'after_title'=>'</h2>',

    ));
    register_sidebar(array(
    'name'=>__('Footer 2','nasiruddin'),
    'id' => 'footer-2',
    'description'=>__('Appeas in the sidebar in blog page and also other page','nasiruddin'),
    'before_widget'=>'<div class="child_sidebar">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="title"',
    'after_title'=>'</h2>',

    ));
    register_sidebar(array(
    'name'=>__('Footer 3','nasiruddin'),
    'id' => 'footer-3',
    'description'=>__('Appeas in the sidebar in blog page and also other page','nasiruddin'),
    'before_widget'=>'<div class="child_sidebar">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="title"',
    'after_title'=>'</h2>',

    ));
}
add_action('widgets_init','nasir_widgets_register');