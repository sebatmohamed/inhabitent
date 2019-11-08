<?php get_header(); ?>

<section class="about">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <div>
    <?php the_post_thumbnail('full');?>
    </div>
    <!-- <h3><?php the_permalink();?></h3> -->

    <main>
    <?php the_content(); ?>
    </main>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>