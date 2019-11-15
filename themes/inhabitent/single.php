
<?php get_header(); ?>

<div class="journal-posts-grid">

<section class="journal-posts">

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="photo-text">
       <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?> 
    </div>
    
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php

if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;?>

</section>


<div class="sidebar">
<?php get_sidebar();?>
</div>

</div>
    
<?php get_footer();?>