<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<div class="nav">
    <a href="/inhabitent/">
        <img src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-tent-white.svg">
    </a>

<i class="fas fa-search"></i> 
<?php wp_nav_menu(array('theme_location' => 'primary'));?>

</div>

<!-- <h1><?php bloginfo('name');?></h1> -->
