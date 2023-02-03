<!doctype html>
<html>
    <head>
        <meta charset="uft-8">
        <title>Custom-Theme-Assesment</title>
        <?php wp_head();?>
       
    </head>

    <body>
        <div class="nav">

        <ul> <?php wp_nav_menu(array('theme_location'=>'primary')); ?></ul>
        </div>
  
        
    <h1>WELCOME TO MY CUSTOM THEME</h1>
    <img src="<?php header_image();?>" height="<?php echo get_custom_header() -> height;?>" width="<?php echo get_custom_header()-> width;?>" alt="">
   