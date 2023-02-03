<?php
function custom_scripts_enqueue(){

/*here we add what will load the css...stylesheet-name,uri of stylesheet,depndencies array,version,media*/


wp_enqueue_style('customstyle', get_template_directory_uri().'/css/custom.css',array(),'1.0.0','all');
wp_enqueue_script('customjs' , get_template_directory_uri().'/js/custom.js',array(),'1.0.0',true);


}

/*add action*/

add_action('wp_enqueue_scripts','custom_scripts_enqueue');


/*to add menu*/ 


function custom_theme_setup(){

    add_theme_support('menus');
    register_nav_menu('primary','navigation Bar');
    register_nav_menu('secondary','footer');
}

add_action('init','custom_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');

/* sidebar function*/

function custom_widgets_setup(){

    register_sidebar(array(
        'name'           => 'sidebar',
		'id'             => 'sidebar-1',
		'description'    => 'custom',
		'class'          => 'standard sidebar',
		'before_widget'  => '<li id="%1$s" class="widget %2$s">',
		'after_widget'   => "</li>\n",
		'before_title'   => '<h2 class="widgettitle">',
		'after_title'    => "</h2>\n",
		
    ));
}

add_action('widgets_init','custom_widgets_setup');