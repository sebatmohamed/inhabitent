<?php get_header(); ?>
<hr>


<section>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


    <div class="single-adventure">
    <?php the_post_thumbnail('large');?>
    </div>

   <div class="single-adventure-grid">
   <h3><?php the_title();?></h3>
   <?php the_content(); ?>
   <section>
    <button><i class="fab fa-facebook-f"></i> Like</button>
   <button><i class="fab fa-twitter"></i> Tweet</button>
   <button><i class="fab fa-pinterest"></i> Pin</button>
   </section>

    </div>
    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>