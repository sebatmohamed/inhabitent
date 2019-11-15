<?php get_header(); ?>


<div class="search-grid">

<section class="search-results">

<h5>Search results for: </h5>

<hr>


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<div class="sidebar">
<?php get_sidebar();?>
</div>

</div>


<?php get_footer();?>