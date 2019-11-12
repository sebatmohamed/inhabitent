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
    <p>Go back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
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


    <?php
    $args = array( 'numberposts' => 3, 'order' => 'ASC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>
    
    <section>

    <?php the_post_thumbnail('large');?>
    <div>
    <?php the_date();?>
    <br>
    <h1><?php the_title();?></h1>
    <br>
    <!-- <p><?php echo wp_trim_words(get_the_excerpt(), 10, '...');?></p> -->
    
    <button class="front-page-journal-sections-btn">Read entry</button>
    </div>

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