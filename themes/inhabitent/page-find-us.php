<?php get_header(); ?>

<section class="find-us">

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <img class="hero-image" src="<?php echo get_stylesheet_directory_uri();?>/images/red-academy-contact.png">
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<?php get_sidebar();?>
<?php get_footer();?>