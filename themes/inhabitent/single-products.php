<?php get_header(); ?>

<section class="single-product-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <?php the_post_thumbnail('large');?>

    <div class="price">
        <h2><?php the_title(); ?></h2>
        <h3><?php echo "$ " . get_field('price');?></h3>
        <?php the_content(); ?>
        <button><i class="fab fa-facebook-f"></i> Like</button>
        <button><i class="fab fa-twitter"></i> Tweet</button>
        <button><i class="fab fa-pinterest"></i> Pin</button>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

    
<?php get_footer();?>