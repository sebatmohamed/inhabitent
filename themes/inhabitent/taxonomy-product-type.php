<?php get_header(); ?>

<div class="product-type-header">

<h1>Hello</h1>

<p>lorem ipsum</p>

</div>

<hr class="dashed">

<section class="taxonomy-products-grid">

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

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<a class="shop-button" href="<?php echo get_home_url() . '/products/';?>">
<section>
<button>Back to Shop</button>
</section>
</a>


    
<?php get_footer();?>