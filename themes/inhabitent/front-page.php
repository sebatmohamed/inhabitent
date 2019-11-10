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

<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/do.svg" width="25%">
<p>Go back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
</div>

<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/eat.svg" width="25%">
<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
</div>

<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/sleep.svg" width="25%">
<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
</div>

<div>
<img src="<?php echo get_stylesheet_directory_uri();?>/images/product-type-icons/wear.svg" width="25%">
<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
</div>

<?php

foreach ($terms as $term):?>

<div class="front-page-product-sections">
    <button class="front-page-product-sections-btn" href="<?php echo "product-type/" . $term->slug ;?>"> <?php echo $term->name ;?> </button>
</div>
    
<?php endforeach;?>

</div>

<h1>Inhabitent Journal</h1>


<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <!-- <?php the_title();
    the_content();?> -->

    <?php endwhile;?>
    
    <?php the_posts_navigation();?>

    <div class="inhabitent-journal">
    
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/blog-photos/van-camper.jpg">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/blog-photos/warm-cocktail.jpg">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/blog-photos/healthy-camp-food.jpg">

    <?php
    $args = array( 'numberposts' => 3, 'order' => 'ASC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>

    <div>
    <?php the_date();?>
    <br>
    <span><?php the_title();?></span>
    <br>
    <?php echo wp_trim_words(get_the_excerpt(), 10, '...');?>
    </div>

    <?php endforeach;?> 

    <?php 
    
    foreach ($terms as $term):?>

    <section class="front-page-journal-sections">
        <button class="front-page-journal-sections-btn">Read entry</button>
    </section>

    <?php endforeach;?> 


    </div>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<h1>Latest adventures</h1>

<div class="latest-adventures">
    <img class='item1' src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/canoe-girl.jpg">
    <img class='item2' src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/beach-bonfire.jpg">
    <img class='item3' src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/mountain-hikers.jpg">
    <img class='item4' src="<?php echo get_stylesheet_directory_uri();?>/images/adventure-photos/night-sky.jpg">
    <button>More adventures</button>
</div>


</section>
    
<?php get_footer();?>