<?php get_header(); ?>

<section class="home">

<div class="home-banner">
<?php the_post_thumbnail('large');?>
<img class="banner-logo" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-full.svg">
</div>

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
foreach ($terms as $term):
    echo $term->name;
    echo '<br>';
    echo $term->$slug;
    echo '<br>';
endforeach;
?>
</div>


<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <?php the_title();
    the_content();?>


    <?php endwhile;?>
    


    <?php the_posts_navigation();?>

    <?php
    $args = array( 'numberposts' => 3, 'order' => 'ASC', 'orderby' => 'title');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>
    <div>
    <?php the_date();?>
    <br>
    <?php the_title();?>
    <?php echo wp_trim_words(get_the_excerpt(), 10, '...');?>
    </div>

    <?php endforeach;?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>