<?php get_header(); ?>

<section class="product">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <?php the_post_thumbnail('large');?>
    <div class="price">
    <h2><?php the_title(); ?></h2>
    <?php echo "$ " . get_field('price');?>
    <?php the_content(); ?>
    </div>
    <!-- <h3><?php the_permalink();?></h3> -->
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

    
<?php get_footer();?>