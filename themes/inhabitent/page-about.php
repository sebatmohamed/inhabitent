<?php get_header(); ?>

<section>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="about-banner">
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail('full');?>
    </div>

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