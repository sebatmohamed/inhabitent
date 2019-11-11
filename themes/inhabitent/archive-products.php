<?php get_header(); ?>

<section class= "all-products">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="archive-products">
    <?php the_post_thumbnail('large');?>
    <h2><?php the_title(); ?></h2>
    <p><?php echo "$ " . get_field('price');?></p>
    </div>    

    
    <!-- Loop ends -->
    <?php endwhile;?>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>