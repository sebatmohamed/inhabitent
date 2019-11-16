<?php get_header(); ?>

<div class="archive-products-title">
<h1>Shop stuff</h1>
</div>

<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide_empty' => false,
));?>

<div class="product-type-links"> 

<?php

foreach ($terms as $term):

$phrase  = $term->slug;
$healthy = ("STUFF");
$yummy   = ("");
$output = str_replace($healthy, $yummy, $phrase);?>

<a href="<?php echo get_home_url() . '/product-type/' . $term->slug ;?>"><?php echo $output;?></a>

<?php endforeach;?>

</div>

<hr class="dashed">

<section class= "taxonomy-products-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <figure class="archive-products">

    <a href="<?php echo get_permalink();?>">

     <?php the_post_thumbnail('large');?>

    <div class="grey-space"></div>

    <figcaption>
        <hr class="dotted">
    
    <div>
        <p><?php the_title();?></p>
        <p><?php echo " $" . get_field('price');?></p>
    </div>
    
    </a>
        
        
    </figcaption>
   
    </figure>    

    
    <!-- Loop ends -->
    <?php endwhile;?>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>