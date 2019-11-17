<?php get_header(); ?>

<section class="home">

<div class="home-banner">
<img class="hero-image" src="<?php echo get_stylesheet_directory_uri();?>/images/home-hero.jpg">
<!-- <?php the_post_thumbnail('large');?> -->
<img class="banner-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg">
</div>

<h1>Shop Stuff</h1>


<div class="shop-stuff">

<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide_empty' => false,
));?>

<?php

foreach ($terms as $term):?>

<div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/<?php echo $term->slug;?>.svg">
    <?php echo category_description($term->term_id);?>
    <a href="<?php echo get_home_url() . '/product-type/' . $term->slug ;?>">
    <button class="front-page-product-sections-btn" href="<?php echo "product-type/" . $term->slug ;?>"> <?php echo $term->name ;?></button>
    </a>
    
</div>
    
<?php endforeach;?>

</div>

<h1>Inhabitent Journal</h1>

    <div class="inhabitent-journal">

    <?php
    $args = array( 'numberposts' => 3, 'order' => 'DESC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>
    
    <section>

    <?php the_post_thumbnail('large');?>
    <div>
    <?php echo the_date() . ' / ';?><?php echo comments_number();?>
    <br>
    <h1><?php the_title();?></h1>
    <br>
    
    <section>
    <a href="<?php echo get_permalink();?>"><button>Read entry</button></a>
    </section>

    </div>

    </section>


    <?php endforeach;?> 


    </div>

<h1>Latest adventures</h1>

    <div class="latest-adventures"> 

<?php
    $args = array( 'numberposts' => 4, 'post_type' => 'adventures', 'order' => 'ASC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>
    
    <figure class="adventure">
    <div>
        <?php the_post_thumbnail('large');?>
        <p><?php the_title();?></p>
        <section>
            <a href="<?php echo get_permalink();?>"><button>Read more</button></a>
        </section>
    </div>

    </figure> 

    <?php endforeach;?>

    </div>

    <div class="adventures-button">
    <section>
    <a href="<?php echo get_home_url() . '/adventures/';?>"><button>More adventures</button></a>
    </section>
    </div>


</section>
    
<?php get_footer();?>