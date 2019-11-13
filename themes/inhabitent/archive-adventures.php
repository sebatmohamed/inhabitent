<?php get_header(); ?>
<hr>

<h1>Latest Adventures</h1>


<section class= "adventures-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    

     <?php the_post_thumbnail('large');?>
     <p><?php the_title();?></p>
     <p><?php the_content();?></p>

    
    <!-- Loop ends -->
    <?php endwhile;?>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>